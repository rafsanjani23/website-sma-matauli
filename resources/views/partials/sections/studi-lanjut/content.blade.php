<section id="studi-lanjut" class="py-12 bg-gray-50">
    <div class="mx-auto max-w-7xl px-4">

        <!-- TAB LIST -->
        <div class="flex justify-center mb-6">
            <div role="tablist" class="inline-flex gap-1 lg:gap-2 p-1 bg-matauli-red-dark rounded-full mb-4">

                <button role="tab" id="tab-tni" aria-controls="panel-tni" aria-selected="true" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('TNI / POLRI') }}
                </button>

                <button role="tab" id="tab-kedinasan" aria-controls="panel-kedinasan" aria-selected="false" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('KEDINASAN') }}
                </button>

                <button role="tab" id="tab-ptn" aria-controls="panel-ptn" aria-selected="false" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('PTN') }}
                </button>

                <button role="tab" id="tab-pts" aria-controls="panel-pts" aria-selected="false" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('PTS') }}
                </button>

                <button role="tab" id="tab-ptln" aria-controls="panel-ptln" aria-selected="false" class="px-4 lg:px-8 py-3 rounded-full text-sm lg:text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200 whitespace-nowrap">
                    {{ __('PTLN') }}
                </button>

            </div>
        </div>

        <!-- ANGKATAN FILTER -->
        <div class="flex justify-center mb-8">
            <form action="{{ route('studi-lanjut') }}" method="GET" class="flex items-center gap-3">
                <label for="angkatan" class="text-sm font-semibold text-slate-700">Filter Angkatan:</label>
                <select name="angkatan" id="angkatan" onchange="this.form.submit()"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent">
                    <option value="">Semua Angkatan</option>
                    @foreach ($angkatanList as $ank)
                        <option value="{{ $ank }}" {{ $angkatan == $ank ? 'selected' : '' }}>{{ $ank }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- PANELS -->

        <div id="panel-tni" role="tabpanel" aria-labelledby="tab-tni">
            @include('partials.sections.studi-lanjut.panels.tni-polri')
        </div>

        <div id="panel-kedinasan" role="tabpanel" aria-labelledby="tab-kedinasan" class="hidden">
           @include('partials.sections.studi-lanjut.panels.kedinasan')
        </div>

        <div id="panel-ptn" role="tabpanel" aria-labelledby="tab-ptn" class="hidden">
           @include('partials.sections.studi-lanjut.panels.ptn')
        </div>

        <div id="panel-pts" role="tabpanel" aria-labelledby="tab-pts" class="hidden">
           @include('partials.sections.studi-lanjut.panels.pts')
        </div>

        <div id="panel-ptln" role="tabpanel" aria-labelledby="tab-ptln" class="hidden">
            @include('partials.sections.studi-lanjut.panels.ptln')
        </div>

    </div>
</section>
