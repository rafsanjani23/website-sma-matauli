<section id="berita-prestasi-testi" class="py-12">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Header -->
    <header class="mb-5 text-center">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
        Visual Portfolio
      </h2>
      <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
    </header>

    <!-- Tab List -->
    <div class="flex justify-center mb-10">
      <div
        role="tablist"
        aria-orientation="horizontal"
        class="inline-flex p-2 bg-matauli-red-dark rounded-full"
      >
        <button
          role="tab"
          id="tab-berita"
          aria-selected="true"
          aria-controls="gallery-berita"
          class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200"
        >
          Berita
        </button>

        <button
          role="tab"
          id="tab-prestasi"
          aria-selected="false"
          aria-controls="gallery-prestasi"
          class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200"
        >
          Prestasi
        </button>

        <button
          role="tab"
          id="tab-testimoni"
          aria-selected="false"
          aria-controls="gallery-testimoni"
          class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200"
        >
          Testimonials
        </button>
      </div>
    </div>

    <!-- Panels -->
    <div id="gallery-berita" role="tabpanel" aria-labelledby="tab-berita">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow p-4 text-center">Berita 1</div>
        <div class="bg-white rounded-xl shadow p-4 text-center">Berita 2</div>
        <div class="bg-white rounded-xl shadow p-4 text-center">Berita 3</div>
      </div>
    </div>

    <div id="gallery-prestasi" role="tabpanel" aria-labelledby="tab-prestasi" class="hidden">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow p-4 text-center">Prestasi A</div>
        <div class="bg-white rounded-xl shadow p-4 text-center">Prestasi B</div>
        <div class="bg-white rounded-xl shadow p-4 text-center">Prestasi C</div>
      </div>
    </div>

    <div id="gallery-testimoni" role="tabpanel" aria-labelledby="tab-testimoni" class="hidden">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow p-4 text-center">Testimoni Orang Tua</div>
        <div class="bg-white rounded-xl shadow p-4 text-center">Testimoni Siswa</div>
        <div class="bg-white rounded-xl shadow p-4 text-center">Testimoni Alumni</div>
      </div>
    </div>

  </div>
</section>
