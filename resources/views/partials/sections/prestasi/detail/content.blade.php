<!-- ============================================ -->
<!-- PRESTASI DETAIL CONTENT - START -->
<!-- ============================================ -->
<section class="py-10 md:py-16 bg-red-50/40">
    <div class="max-w-3xl mx-auto px-6 md:px-8">

        <!-- JUDUL PRESTASI -->
        <h1 class="text-2xl md:text-3xl font-bold text-slate-900 text-center mb-8 md:mb-10">
            {{ $item->judul }}
        </h1>

        <!-- GAMBAR PRESTASI -->
        <div class="w-full max-w-md mx-auto rounded-xl overflow-hidden shadow-lg mb-10 md:mb-12">
            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover" />
        </div>

        <!-- INFO -->
        <div class="flex flex-wrap items-center justify-center gap-4 mb-8">
            <span class="bg-yellow-400 text-black font-bold px-4 py-1.5 rounded-lg text-sm">{{ $item->nama_lomba }}</span>
            <span class="text-sm text-slate-500">{{ $item->tingkatan }}</span>
        </div>

        <!-- ISI PRESTASI -->
        <div class="space-y-6 text-slate-700 text-sm md:text-base leading-relaxed text-justify">
            {!! nl2br(e($item->isi)) !!}
        </div>

        <!-- TANGGAL -->
        <div class="flex items-center justify-end gap-4 mt-10 md:mt-12">
            <span class="text-sm text-slate-500">{{ $item->tanggal->format('d F Y') }}</span>
        </div>

    </div>
</section>
<!-- ============================================ -->
<!-- PRESTASI DETAIL CONTENT - END -->
<!-- ============================================ -->
