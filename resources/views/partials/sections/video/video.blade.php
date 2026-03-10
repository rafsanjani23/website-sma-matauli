<!-- ============================================ -->
<!-- GALERI VIDEO CONTENT - START -->
<!-- ============================================ -->
<section class="bg-white mb-16">
    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-2 px-10">

            @forelse ($items as $item)
            <div>
                <div
                    class="bg-white border border-gray-200 shadow-md w-full max-w-sm rounded-4xl overflow-hidden mx-auto relative group">
                    <div class="aspect-3/2 relative cursor-pointer" onclick="openVideoModal('{{ $item->youtube_id }}')">
                        <img src="https://img.youtube.com/vi/{{ $item->youtube_id }}/hqdefault.jpg" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover" />
                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/40 transition-all duration-300">
                            <div class="w-14 h-14 bg-matauli-red-dark/90 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 absolute bottom-0 left-0 right-0 bg-matauli-red-dark rounded-2xl opacity-90">
                        <h3 class="text-lg text-center font-semibold text-white line-clamp-1">{{ $item->judul }}</h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12 text-gray-400">Belum ada video.</div>
            @endforelse

        </div>
    </div>
</section>
<!-- ============================================ -->
<!-- GALERI VIDEO CONTENT - END -->
<!-- ============================================ -->

<!-- ============================================ -->
<!-- VIDEO MODAL -->
<!-- ============================================ -->
<div id="videoModal" class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/70 backdrop-blur-sm">
    <!-- Close Button -->
    <button onclick="closeVideoModal()"
        class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/20 hover:bg-white/40 rounded-full flex items-center justify-center transition-colors cursor-pointer">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Video Container -->
    <div class="w-full max-w-4xl mx-4 aspect-video rounded-2xl overflow-hidden shadow-2xl">
        <iframe id="videoIframe" class="w-full h-full" src="" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
</div>

<script>
    function openVideoModal(videoId) {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoIframe');
        iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoIframe');
        iframe.src = '';
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    document.getElementById('videoModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeVideoModal();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeVideoModal();
        }
    });
</script>
