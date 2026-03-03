<section id="studi-lanjut" class="py-12 bg-gray-50">
    <div class="mx-auto max-w-7xl">

        <!-- TAB LIST -->
        <div class="flex justify-center mb-8">
            <div role="tablist" class="flex justify-center gap-2 lg:gap-10 p-1 bg-matauli-red-dark rounded-full w-full max-w-3xl mb-4">

                <button role="tab" id="tab-tni" aria-controls="panel-tni" aria-selected="true" class="px-8 lg:px-12 py-3 rounded-full text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    TNI / POLRI
                </button>

                <button role="tab" id="tab-kedinasan" aria-controls="panel-kedinasan" aria-selected="false" class="px-8 lg:px-12 py-3 rounded-full text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    KEDINASAN
                </button>

                <button role="tab" id="tab-ptn" aria-controls="panel-ptn" aria-selected="false" class="px-8 lg:px-12 py-3 rounded-full text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    PTN
                </button>

                <button role="tab" id="tab-ptln" aria-controls="panel-ptln" aria-selected="false" class="px-8 lg:px-12 py-3 rounded-full text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    PTLN
                </button>

            </div>
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

        <div id="panel-ptln" role="tabpanel" aria-labelledby="tab-ptln" class="hidden">
            @include('partials.sections.studi-lanjut.panels.ptln')
        </div>

    </div>
</section>
