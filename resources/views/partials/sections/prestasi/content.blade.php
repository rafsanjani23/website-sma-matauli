<section id="prestasi-tabs" class="pb-12 md:pb-16 lg:pb-20 bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-12 xl:px-24">

        <!-- TAB LIST -->
        <div class="flex justify-center mb-8">
            <div role="tablist" class="inline-flex gap-1 lg:gap-2 p-1 bg-matauli-red-dark rounded-full mb-4">

                <button role="tab" id="tab-prestasi-sekolah" aria-controls="panel-prestasi-sekolah" aria-selected="true" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('Prestasi Sekolah') }}
                </button>

                <button role="tab" id="tab-prestasi-siswa" aria-controls="panel-prestasi-siswa" aria-selected="false" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('Prestasi Siswa') }}
                </button>

                <button role="tab" id="tab-prestasi-guru" aria-controls="panel-prestasi-guru" aria-selected="false" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('Prestasi Guru') }}
                </button>

            </div>
        </div>

        <!-- PANELS -->
        <div id="panel-prestasi-sekolah" role="tabpanel" aria-labelledby="tab-prestasi-sekolah">
            @include('partials.sections.prestasi.panel', ['items' => $prestasiSekolah])
        </div>

        <div id="panel-prestasi-siswa" role="tabpanel" aria-labelledby="tab-prestasi-siswa" class="hidden">
            @include('partials.sections.prestasi.panel', ['items' => $prestasiSiswa])
        </div>

        <div id="panel-prestasi-guru" role="tabpanel" aria-labelledby="tab-prestasi-guru" class="hidden">
            @include('partials.sections.prestasi.panel', ['items' => $prestasiGuru])
        </div>

    </div>
</section>
