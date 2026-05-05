<script>
(function () {
    const form = document.getElementById('video-form');
    if (!form) return;

    const radios = form.querySelectorAll('[data-source-radio]');
    const ytPane = form.querySelector('[data-source-pane="youtube"]');
    const upPane = form.querySelector('[data-source-pane="upload"]');
    const ytInput = form.querySelector('#youtube_link');

    const videoInput = form.querySelector('[data-video-input]');
    const videoError = form.querySelector('[data-video-error]');
    const thumbSection = form.querySelector('[data-thumb-section]');
    const thumbGrid = form.querySelector('[data-thumb-grid]');
    const thumbLoading = form.querySelector('[data-thumb-loading]');
    const thumbDataInput = form.querySelector('[data-thumb-data]');
    const manualThumbInput = form.querySelector('[data-manual-thumb-input]');
    const manualThumbPreview = form.querySelector('[data-manual-thumb-preview]');
    const manualThumbImg = manualThumbPreview ? manualThumbPreview.querySelector('img') : null;

    const MAX_VIDEO_BYTES = 100 * 1024 * 1024;

    function setSource(value) {
        if (value === 'youtube') {
            ytPane.classList.remove('hidden');
            upPane.classList.add('hidden');
            if (ytInput) ytInput.required = true;
            if (videoInput) videoInput.required = false;
        } else {
            ytPane.classList.add('hidden');
            upPane.classList.remove('hidden');
            if (ytInput) ytInput.required = false;
            const hasExisting = upPane.dataset.hasExistingVideo === '1';
            if (videoInput) videoInput.required = !hasExisting;
        }
    }

    radios.forEach(r => r.addEventListener('change', e => setSource(e.target.value)));
    const checked = form.querySelector('[data-source-radio]:checked');
    if (checked) setSource(checked.value);

    if (!videoInput) return;

    videoInput.addEventListener('change', async function (e) {
        videoError.classList.add('hidden');
        thumbGrid.innerHTML = '';
        thumbDataInput.value = '';

        const file = e.target.files[0];
        if (!file) {
            thumbSection.classList.add('hidden');
            return;
        }

        if (file.size > MAX_VIDEO_BYTES) {
            videoError.textContent = 'File terlalu besar (max 100 MB). Compress dulu di handbrake.fr.';
            videoError.classList.remove('hidden');
            videoInput.value = '';
            thumbSection.classList.add('hidden');
            return;
        }

        if (!/\.mp4$/i.test(file.name) && file.type !== 'video/mp4') {
            videoError.textContent = 'Format harus MP4.';
            videoError.classList.remove('hidden');
            videoInput.value = '';
            thumbSection.classList.add('hidden');
            return;
        }

        thumbSection.classList.remove('hidden');
        thumbLoading.classList.remove('hidden');

        try {
            const dataUrls = await generateThumbnails(file, [0.1, 0.5, 0.9]);
            thumbLoading.classList.add('hidden');
            renderThumbnails(dataUrls);
        } catch (err) {
            thumbLoading.classList.add('hidden');
            videoError.textContent = 'Gagal memproses video di browser. Coba upload thumbnail manual.';
            videoError.classList.remove('hidden');
        }
    });

    async function generateThumbnails(file, percentages) {
        const url = URL.createObjectURL(file);
        const video = document.createElement('video');
        video.preload = 'auto';
        video.muted = true;
        video.playsInline = true;
        video.src = url;

        await new Promise((resolve, reject) => {
            video.addEventListener('loadedmetadata', resolve, { once: true });
            video.addEventListener('error', () => reject(new Error('metadata error')), { once: true });
        });

        const duration = video.duration;
        if (!duration || !isFinite(duration)) {
            URL.revokeObjectURL(url);
            throw new Error('invalid duration');
        }

        const results = [];
        for (const p of percentages) {
            const t = Math.max(0.1, Math.min(duration - 0.1, duration * p));
            const dataUrl = await captureFrameAt(video, t);
            results.push(dataUrl);
        }

        URL.revokeObjectURL(url);
        return results;
    }

    function captureFrameAt(video, time) {
        return new Promise((resolve, reject) => {
            const onSeeked = () => {
                try {
                    const canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    canvas.getContext('2d').drawImage(video, 0, 0);
                    resolve(canvas.toDataURL('image/jpeg', 0.85));
                } catch (e) {
                    reject(e);
                } finally {
                    video.removeEventListener('seeked', onSeeked);
                    video.removeEventListener('error', onError);
                }
            };
            const onError = () => {
                video.removeEventListener('seeked', onSeeked);
                video.removeEventListener('error', onError);
                reject(new Error('seek error'));
            };
            video.addEventListener('seeked', onSeeked);
            video.addEventListener('error', onError);
            video.currentTime = time;
        });
    }

    function renderThumbnails(dataUrls) {
        thumbGrid.innerHTML = '';
        dataUrls.forEach((dataUrl, idx) => {
            const wrapper = document.createElement('button');
            wrapper.type = 'button';
            wrapper.className = 'relative rounded-lg overflow-hidden border-2 border-gray-200 hover:border-red-400 transition cursor-pointer';
            wrapper.dataset.thumbOption = '';
            wrapper.dataset.thumbValue = dataUrl;

            const img = document.createElement('img');
            img.src = dataUrl;
            img.className = 'w-full aspect-video object-cover';
            wrapper.appendChild(img);

            const badge = document.createElement('span');
            badge.className = 'absolute top-1 left-1 bg-black/60 text-white text-[10px] px-1.5 py-0.5 rounded';
            badge.textContent = ['Awal', 'Tengah', 'Akhir'][idx] || ('#' + (idx + 1));
            wrapper.appendChild(badge);

            wrapper.addEventListener('click', () => selectThumb(wrapper, dataUrl));
            thumbGrid.appendChild(wrapper);
        });
    }

    function selectThumb(el, dataUrl) {
        thumbGrid.querySelectorAll('[data-thumb-option]').forEach(b => {
            b.classList.remove('border-red-800', 'ring-2', 'ring-red-800');
            b.classList.add('border-gray-200');
        });
        el.classList.remove('border-gray-200');
        el.classList.add('border-red-800', 'ring-2', 'ring-red-800');
        thumbDataInput.value = dataUrl;

        if (manualThumbInput) manualThumbInput.value = '';
        if (manualThumbPreview) manualThumbPreview.classList.add('hidden');
    }

    if (manualThumbInput) {
        manualThumbInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) {
                if (manualThumbPreview) manualThumbPreview.classList.add('hidden');
                return;
            }
            const reader = new FileReader();
            reader.onload = (ev) => {
                if (manualThumbImg) manualThumbImg.src = ev.target.result;
                if (manualThumbPreview) manualThumbPreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);

            thumbDataInput.value = '';
            thumbGrid.querySelectorAll('[data-thumb-option]').forEach(b => {
                b.classList.remove('border-red-800', 'ring-2', 'ring-red-800');
                b.classList.add('border-gray-200');
            });
        });
    }

    const overlay = form.querySelector('[data-loading-overlay]');
    const overlayTitle = form.querySelector('[data-loading-title]');
    const overlaySubtitle = form.querySelector('[data-loading-subtitle]');
    const progressWrapper = form.querySelector('[data-progress-wrapper]');
    const progressBar = form.querySelector('[data-progress-bar]');
    const progressText = form.querySelector('[data-progress-text]');

    function showOverlay({ title, subtitle, withProgress }) {
        if (!overlay) return;
        overlayTitle.textContent = title || 'Sedang memproses...';
        overlaySubtitle.textContent = subtitle || 'Jangan tutup atau refresh halaman ini.';
        if (withProgress) {
            progressWrapper.classList.remove('hidden');
            progressBar.style.width = '0%';
            progressText.textContent = '0%';
        } else {
            progressWrapper.classList.add('hidden');
        }
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function hideOverlay() {
        if (!overlay) return;
        overlay.classList.add('hidden');
        overlay.classList.remove('flex');
        document.body.style.overflow = '';
    }

    function updateProgress(loaded, total) {
        const pct = total > 0 ? Math.round((loaded / total) * 100) : 0;
        progressBar.style.width = pct + '%';
        const mb = (loaded / 1048576).toFixed(1);
        const totalMb = (total / 1048576).toFixed(1);
        progressText.textContent = pct + '% (' + mb + ' / ' + totalMb + ' MB)';
        if (pct >= 100) {
            overlayTitle.textContent = 'Menyimpan ke server...';
            overlaySubtitle.textContent = 'Upload selesai, server sedang memproses. Tunggu sebentar.';
        }
    }

    function showServerErrors(errors) {
        let existing = form.querySelector('[data-error-box]');
        if (existing) existing.remove();

        const box = document.createElement('div');
        box.dataset.errorBox = '';
        box.className = 'bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm';

        const ul = document.createElement('ul');
        ul.className = 'list-disc list-inside space-y-1';
        Object.values(errors).forEach(arr => {
            (Array.isArray(arr) ? arr : [arr]).forEach(msg => {
                const li = document.createElement('li');
                li.textContent = msg;
                ul.appendChild(li);
            });
        });
        box.appendChild(ul);
        form.parentNode.insertBefore(box, form);
        box.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    let isUploadingFile = false;

    form.addEventListener('submit', function (e) {
        const sourceType = form.querySelector('[data-source-radio]:checked')?.value;
        const hasExisting = upPane.dataset.hasExistingVideo === '1';
        const hasNewVideo = videoInput.files && videoInput.files.length > 0;

        if (sourceType === 'upload') {
            if (!hasExisting && !hasNewVideo) {
                e.preventDefault();
                e.stopPropagation();
                videoError.textContent = 'Pilih file video terlebih dahulu.';
                videoError.classList.remove('hidden');
                return;
            }

            if (hasNewVideo) {
                const hasGenerated = !!thumbDataInput.value;
                const hasManual = manualThumbInput && manualThumbInput.files && manualThumbInput.files.length > 0;
                if (!hasGenerated && !hasManual) {
                    e.preventDefault();
                    e.stopPropagation();
                    alert('Pilih salah satu thumbnail atau upload thumbnail manual.');
                    return;
                }
            }
        }

        if (form.dataset.confirmed !== 'true') {
            return;
        }

        if (sourceType !== 'upload' || !hasNewVideo) {
            showOverlay({ title: 'Menyimpan...', withProgress: false });
            return;
        }

        e.preventDefault();
        showOverlay({ title: 'Mengupload video...', subtitle: 'Jangan tutup atau refresh halaman ini.', withProgress: true });
        isUploadingFile = true;

        const xhr = new XMLHttpRequest();
        const formData = new FormData(form);

        xhr.upload.addEventListener('progress', function (ev) {
            if (ev.lengthComputable) updateProgress(ev.loaded, ev.total);
        });

        xhr.addEventListener('load', function () {
            isUploadingFile = false;
            if (xhr.status >= 200 && xhr.status < 300) {
                try {
                    const data = JSON.parse(xhr.responseText);
                    if (data && data.redirect) {
                        window.location.href = data.redirect;
                        return;
                    }
                } catch (err) {}
                window.location.href = xhr.responseURL || form.action;
            } else if (xhr.status === 422) {
                hideOverlay();
                try {
                    const data = JSON.parse(xhr.responseText);
                    showServerErrors(data.errors || { _: [data.message || 'Data tidak valid.'] });
                } catch (err) {
                    showServerErrors({ _: ['Validasi gagal.'] });
                }
            } else if (xhr.status === 413) {
                hideOverlay();
                showServerErrors({ _: ['File terlalu besar untuk server. Cek konfigurasi PHP upload limit.'] });
            } else {
                hideOverlay();
                showServerErrors({ _: ['Terjadi error server (HTTP ' + xhr.status + ').'] });
            }
        });

        xhr.addEventListener('error', function () {
            isUploadingFile = false;
            hideOverlay();
            showServerErrors({ _: ['Koneksi terputus. Coba lagi.'] });
        });

        xhr.addEventListener('abort', function () {
            isUploadingFile = false;
        });

        xhr.open('POST', form.action, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.send(formData);
    });

    window.addEventListener('beforeunload', function (e) {
        if (!isUploadingFile) return;
        e.preventDefault();
        e.returnValue = '';
    });
})();
</script>
