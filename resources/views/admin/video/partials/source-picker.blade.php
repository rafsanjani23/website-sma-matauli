<div>
    <label class="block text-sm font-semibold text-gray-700 mb-2">Sumber Video <span class="text-red-600">*</span></label>
    <div class="flex gap-4 mb-4">
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="source_type" value="youtube" {{ $oldSourceType === 'youtube' ? 'checked' : '' }} class="w-4 h-4 text-red-800 focus:ring-red-800" data-source-radio />
            <span class="text-sm text-gray-700">Link YouTube</span>
        </label>
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="source_type" value="upload" {{ $oldSourceType === 'upload' ? 'checked' : '' }} class="w-4 h-4 text-red-800 focus:ring-red-800" data-source-radio />
            <span class="text-sm text-gray-700">Upload Video</span>
        </label>
    </div>
</div>

<div data-source-pane="youtube" class="{{ $oldSourceType === 'youtube' ? '' : 'hidden' }}">
    <label for="youtube_link" class="block text-sm font-semibold text-gray-700 mb-1.5">YouTube Link</label>
    @php
        $previewYtId = null;
        if (!empty($oldYoutubeLink) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/', $oldYoutubeLink, $m)) {
            $previewYtId = $m[1];
        }
    @endphp
    @if ($previewYtId)
        <img src="https://img.youtube.com/vi/{{ $previewYtId }}/hqdefault.jpg" alt="Thumbnail YouTube" class="w-40 h-24 object-cover rounded-lg mb-3" />
    @endif
    <input type="url" name="youtube_link" id="youtube_link" value="{{ $oldYoutubeLink }}" placeholder="contoh: https://www.youtube.com/watch?v=lXwn83rmegQ" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
</div>

<div data-source-pane="upload" data-has-existing-video="{{ !empty($currentVideoPath) ? '1' : '0' }}" class="{{ $oldSourceType === 'upload' ? '' : 'hidden' }} space-y-4">
    <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-xl text-sm">
        <p class="font-semibold mb-1">Tips sebelum upload:</p>
        <p>Compress video dulu di <a href="https://handbrake.fr" target="_blank" rel="noopener" class="underline font-semibold">handbrake.fr</a> atau pakai online compressor agar ukuran file kecil dan halaman user tetap ringan.</p>
        <p class="mt-1 text-xs">Format: <strong>MP4</strong> saja. Maksimal <strong>100 MB</strong>.</p>
    </div>

    @if (!empty($currentVideoPath))
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Video Saat Ini</label>
            <video src="{{ asset('storage/' . $currentVideoPath) }}" controls preload="none" class="w-full max-w-md rounded-lg bg-black"
                @if (!empty($currentThumbnailPath)) poster="{{ asset('storage/' . $currentThumbnailPath) }}" @endif></video>
        </div>
    @endif

    <div>
        <label for="video_file" class="block text-sm font-semibold text-gray-700 mb-1.5">
            File Video {{ empty($currentVideoPath) ? '' : '(kosongkan jika tidak ingin diganti)' }}
            @if (empty($currentVideoPath)) <span class="text-red-600">*</span> @endif
        </label>
        <input type="file" name="video_file" id="video_file" accept="video/mp4" data-video-input class="w-full text-sm text-gray-700 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100" />
        <p data-video-error class="hidden text-xs text-red-600 mt-1.5"></p>
    </div>

    <div data-thumb-section class="hidden space-y-3">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Pilih Thumbnail</label>
            <p class="text-xs text-gray-500 mb-3">Klik salah satu thumbnail di bawah, atau upload thumbnail manual jika tidak ada yang cocok.</p>

            <div data-thumb-loading class="text-sm text-gray-500 italic mb-3">Memproses video, generate thumbnail...</div>

            <div data-thumb-grid class="grid grid-cols-3 gap-3"></div>
        </div>
    </div>

    <div>
        <label for="thumbnail_file" class="block text-sm font-semibold text-gray-700 mb-1.5">Thumbnail Manual <span class="text-gray-400 text-xs font-normal">(opsional, JPG/PNG max 2MB)</span></label>
        <input type="file" name="thumbnail_file" id="thumbnail_file" accept="image/jpeg,image/png" data-manual-thumb-input class="w-full text-sm text-gray-700 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100" />
        <div data-manual-thumb-preview class="hidden mt-2">
            <img alt="Preview thumbnail manual" class="w-40 h-24 object-cover rounded-lg border-2 border-red-800" />
        </div>
    </div>

    <input type="hidden" name="thumbnail_data" data-thumb-data />
</div>

<div data-loading-overlay class="hidden fixed inset-0 z-[9999] bg-black/60 backdrop-blur-sm items-center justify-center">
    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full mx-4 text-center">
        <div class="flex justify-center mb-4">
            <svg class="animate-spin h-12 w-12 text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
        <h3 data-loading-title class="text-lg font-bold text-gray-900 mb-2">Sedang memproses...</h3>
        <p data-loading-subtitle class="text-sm text-gray-600 mb-4">Jangan tutup atau refresh halaman ini.</p>

        <div data-progress-wrapper class="hidden">
            <div class="w-full bg-gray-200 rounded-full h-3 mb-2 overflow-hidden">
                <div data-progress-bar class="bg-red-800 h-full transition-all duration-200" style="width: 0%"></div>
            </div>
            <p data-progress-text class="text-xs text-gray-500 font-mono">0%</p>
        </div>
    </div>
</div>
