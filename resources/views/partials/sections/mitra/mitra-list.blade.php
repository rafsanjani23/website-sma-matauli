<section class="py-16 bg-[#fdf9f6] text-center">

    <h2 class="text-3xl md:text-4xl font-extrabold">
        KOLABORASI DAN KEMITRAAN
    </h2>
    <p class="mt-3 text-gray-600 max-w-xl mx-auto text-sm md:text-base">
        Kami menjalin kolaborasi dengan berbagai perusahaan nasional dan internasional
    </p>
    <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>

    <div class="relative mt-10 max-w-4xl mx-auto">

        <!-- Tombol panah → hidden di mobile -->
        <button id="prev" class="hidden md:flex absolute -left-11 top-1/2 -translate-y-1/2
             bg-white shadow-lg w-12 h-12 rounded-full
             items-center justify-center hover:bg-gray-100">
            ❮
        </button>

        <!-- Slider -->
        <div id="slider" class="flex gap-4 md:gap-5
             overflow-x-auto md:overflow-hidden
             scroll-smooth snap-x snap-mandatory
             px-4">

            @forelse ($items as $item)
            <a href="{{ route('mitra-detail', $item->id) }}">
                <div class="snap-center shrink-0
                  w-55 md:min-w-70
                  h-32 md:h-40
                  border border-red-400 rounded-2xl
                  flex items-center justify-center
                  font-semibold bg-white overflow-hidden">
                    @if ($item->gambar_mitra)
                        <img src="{{ Storage::url($item->gambar_mitra) }}" alt="{{ $item->nama_mitra }}" class="w-full h-full object-contain p-2" />
                    @else
                        {{ $item->nama_mitra }}
                    @endif
                </div>
            </a>
            @empty
            <div class="w-full text-center py-8 text-gray-400">Belum ada data mitra.</div>
            @endforelse

        </div>

        <!-- Tombol kanan -->
        <button id="next" class="hidden md:flex absolute -right-13 top-1/2 -translate-y-1/2
             bg-white shadow-lg w-12 h-12 rounded-full
             items-center justify-center hover:bg-gray-100">
            ❯
        </button>

    </div>
</section>

<script>
    const slider = document.getElementById("slider");
    const nextBtn = document.getElementById("next");
    const prevBtn = document.getElementById("prev");

    const scrollAmount = 320;

    nextBtn.addEventListener("click", () => {
        slider.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
        });
    });

    prevBtn.addEventListener("click", () => {
        slider.scrollBy({
            left: -scrollAmount,
            behavior: "smooth"
        });
    });
</script>
