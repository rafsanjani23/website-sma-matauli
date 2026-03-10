<!-- ============================================ -->
<!-- MEDIA DETAIL CONTENT - START -->
<!-- ============================================ -->
<section class="py-10 md:py-16 bg-red-50/40">
    <div class="max-w-3xl mx-auto px-6 md:px-8">

        <!-- JUDUL BERITA -->
        <h1 class="text-2xl md:text-3xl font-bold text-slate-900 text-center mb-8 md:mb-10">
            {{ $item->judul }}
        </h1>

        <!-- GAMBAR BERITA -->
        <div class="w-full max-w-md mx-auto rounded-xl overflow-hidden shadow-lg mb-10 md:mb-12">
            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover" />
        </div>

        <!-- ISI BERITA -->
        <div class="space-y-6 text-slate-700 text-sm md:text-base leading-relaxed text-justify">
            {!! nl2br(e($item->isi)) !!}
        </div>

        <!-- TANGGAL & FACEBOOK -->
        <div class="flex items-center justify-end gap-4 mt-10 md:mt-12">
            <span class="text-sm text-slate-500">{{ $item->tanggal->format('d F Y') }}</span>
            @if ($item->link_facebook)
                <a href="{{ $item->link_facebook }}" target="_blank" class="text-blue-600 hover:text-blue-700 transition">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            @endif
        </div>

    </div>
</section>
<!-- ============================================ -->
<!-- MEDIA DETAIL CONTENT - END -->
<!-- ============================================ -->
