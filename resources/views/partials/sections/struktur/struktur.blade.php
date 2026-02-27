{{-- ============================================ --}}
{{-- STRUKTUR ORGANISASI SECTION --}}
{{-- ============================================ --}}
<section class="py-16 md:py-24 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        {{-- Header --}}
        <div class="text-center mb-12 md:mb-16">
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-black">
                Struktur Organisasi
            </h2>
            <p class="text-gray-500 text-sm md:text-base mt-4 max-w-xl mx-auto">
                Susunan kepemimpinan dan organisasi SMAN 1 Matauli Pandan
            </p>
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
        </div>

        {{-- ======================= --}}
        {{-- DESKTOP ORG CHART --}}
        {{-- ======================= --}}
        <div class="hidden md:block">

            {{-- TOP: Pengurus → Kepala --}}
            <div class="flex flex-col items-center">

                {{-- Pengurus Sekolah --}}
                <div
                    class="bg-linear-to-br from-red-800 to-red-950 text-white px-8 py-4 rounded-2xl shadow-xl text-center min-w-64 border border-red-700">
                    <p class="text-xs font-bold tracking-widest uppercase text-white mb-1">Pengurus Yayasan</p>
                    <p class="font-bold text-base">Nama Pengurus Sekolah</p>
                </div>

                {{-- Connector --}}
                <div class="w-0.5 h-8 bg-linear-to-b from-red-800 to-slate-300"></div>

                {{-- Kepala Sekolah --}}
                <div
                    class="relative bg-linear-to-br from-red-800 to-red-950 text-white px-10 py-5 rounded-2xl shadow-2xl text-center min-w-72 border-2 border-yellow-400/50">
                    {{-- Crown accent --}}
                    <div class="absolute -top-0.5 left-1/2 -translate-x-1/2 w-20 h-0.5 bg-yellow-400 rounded-full">
                    </div>
                    <p class="text-xs font-bold tracking-widest uppercase text-white mb-1">Kepala Sekolah</p>
                    <p class="font-bold text-lg">Deden Rachmawan, S.Pd., M.M</p>
                </div>

                {{-- Connector to branches --}}
                <div class="w-0.5 h-8 bg-slate-300"></div>

                {{-- Horizontal line spanning branches --}}
                <div class="w-full max-w-5xl h-0.5 bg-slate-300 relative">
                    {{-- Tick marks at each column (5 columns: 10%, 30%, 50%, 70%, 90%) --}}
                    <div class="absolute top-0 left-[10%] w-0.5 h-4 bg-slate-300"></div>
                    <div class="absolute top-0 left-[30%] w-0.5 h-4 bg-slate-300"></div>
                    <div class="absolute top-0 left-1/2 -translate-x-px w-0.5 h-4 bg-slate-300"></div>
                    <div class="absolute top-0 left-[70%] w-0.5 h-4 bg-slate-300"></div>
                    <div class="absolute top-0 left-[90%] w-0.5 h-4 bg-slate-300"></div>
                </div>
            </div>

            {{-- BRANCHES --}}
            <div class="grid grid-cols-5 gap-4 max-w-5xl mx-auto mt-0">

                {{-- Wakasek Humas --}}
                <div class="flex flex-col items-center">
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                        <div class="p-4 text-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center mx-auto mb-2 transition-colors duration-300">
                                <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                            </div>
                            <p class="font-bold text-red-900 text-xs leading-tight mb-1">Wakasek Humas</p>
                            <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">
                                Nama Wakasek Humas</p>
                        </div>
                    </div>
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-xl shadow border border-gray-100 p-3 text-center hover:border-yellow-400 transition-colors">
                        <p class="text-xs font-semibold text-red-900">Litbang 1</p>
                        <p class="text-xs text-gray-500 mt-0.5">Nama Litbang 1</p>
                    </div>
                </div>

                {{-- Wakasek Kesiswaan --}}
                <div class="flex flex-col items-center">
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                        <div class="p-4 text-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center mx-auto mb-2 transition-colors duration-300">
                                <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <p class="font-bold text-red-900 text-xs leading-tight mb-1">Wakasek Kesiswaan</p>
                            <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">
                                Nama Wakasek Kesiswaan</p>
                        </div>
                    </div>
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-xl shadow border border-gray-100 p-3 text-center hover:border-yellow-400 transition-colors">
                        <p class="text-xs font-semibold text-red-900">Litbang 2</p>
                        <p class="text-xs text-gray-500 mt-0.5">Nama Litbang 2</p>
                    </div>
                </div>

                {{-- Wakasek Kurikulum --}}
                <div class="flex flex-col items-center">
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="h-1 bg-linear-to-r from-red-800 to-red-600 group-hover:bg-red-800"></div>
                        <div class="p-4 text-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center mx-auto mb-2 transition-colors duration-300">
                                <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <p class="font-bold text-red-900 text-xs leading-tight mb-1">Wakasek Kurikulum</p>
                            <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">
                                Nama Wakasek Kurikulum</p>
                        </div>
                    </div>
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-xl shadow border border-gray-100 p-3 text-center hover:border-yellow-400 transition-colors">
                        <p class="text-xs font-semibold text-red-900">Litbang 3</p>
                        <p class="text-xs text-gray-500 mt-0.5">Nama Litbang 3</p>
                    </div>
                </div>

                {{-- Wakasek Sarpras --}}
                <div class="flex flex-col items-center">
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                        <div class="p-4 text-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center mx-auto mb-2 transition-colors duration-300">
                                <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                            </div>
                            <p class="font-bold text-red-900 text-xs leading-tight mb-1">Wakasek Sarpras</p>
                            <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">
                                Nama Wakasek Sarpras</p>
                        </div>
                    </div>
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-xl shadow border border-gray-100 p-3 text-center hover:border-yellow-400 transition-colors">
                        <p class="text-xs font-semibold text-red-900">Litbang 4</p>
                        <p class="text-xs text-gray-500 mt-0.5">Nama Litbang 4</p>
                    </div>
                </div>

                {{-- Wakasek Asrama --}}
                <div class="flex flex-col items-center">
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                        <div class="p-4 text-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center mx-auto mb-2 transition-colors duration-300">
                                <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                            <p class="font-bold text-red-900 text-xs leading-tight mb-1">Wakasek Asrama</p>
                            <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">
                                Nama Wakasek Asrama</p>
                        </div>
                    </div>
                    <div class="w-0.5 h-4 bg-slate-300"></div>
                    <div
                        class="w-full bg-white rounded-xl shadow border border-gray-100 p-3 text-center hover:border-yellow-400 transition-colors">
                        <p class="text-xs font-semibold text-red-900">Litbang 5</p>
                        <p class="text-xs text-gray-500 mt-0.5">Nama Litbang 5</p>
                    </div>
                </div>

            </div>
        </div>{{-- END DESKTOP --}}


        {{-- ======================= --}}
        {{-- MOBILE ORG CHART --}}
        {{-- Tampilan card vertikal  --}}
        {{-- ======================= --}}
        <div class="md:hidden space-y-4">

            {{-- Pengurus --}}
            <div
                class="bg-linear-to-br from-red-800 to-red-950 text-white rounded-2xl p-4 shadow-xl border border-red-700 text-center">
                <p class="text-xs font-bold tracking-widest uppercase text-yellow-400 mb-1">Pengurus Yayasan</p>
                <p class="font-bold">Nama Pengurus Sekolah</p>
            </div>

            <div class="flex justify-center">
                <div class="w-0.5 h-6 bg-slate-300"></div>
            </div>

            {{-- Kepala Sekolah --}}
            <div
                class="bg-linear-to-br from-red-800 to-red-950 text-white rounded-2xl p-5 shadow-2xl border-2 border-yellow-400/50 text-center">
                <p class="text-xs font-bold tracking-widest uppercase text-yellow-400 mb-1">Kepala Sekolah</p>
                <p class="font-bold text-base">Deden Rachmawan, S.Pd., M.M</p>
            </div>

            <div class="flex justify-center">
                <div class="w-0.5 h-6 bg-slate-300"></div>
            </div>

            {{-- Wakasek cards --}}
            <p class="text-center text-xs font-bold tracking-widest uppercase text-gray-400">Wakil Kepala Sekolah</p>

            {{-- Wakasek Humas --}}
            <div
                class="group bg-white rounded-2xl shadow border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-xl transition-all duration-300">
                <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                <div class="flex items-center gap-4 p-4">
                    <div
                        class="shrink-0 w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                            fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-red-900 text-sm">Wakasek Humas</p>
                        <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">Nama
                            Wakasek Humas</p>
                    </div>
                    <div class="shrink-0 text-right">
                        <p
                            class="text-xs font-semibold text-red-900 bg-red-50 group-hover:bg-white/40 px-2 py-1 rounded-lg transition-colors duration-300">
                            Litbang 1</p>
                    </div>
                </div>
            </div>

            {{-- Wakasek Kesiswaan --}}
            <div
                class="group bg-white rounded-2xl shadow border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-xl transition-all duration-300">
                <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                <div class="flex items-center gap-4 p-4">
                    <div
                        class="shrink-0 w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                            fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-red-900 text-sm">Wakasek Kesiswaan</p>
                        <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">Nama
                            Wakasek Kesiswaan</p>
                    </div>
                    <div class="shrink-0 text-right">
                        <p
                            class="text-xs font-semibold text-red-900 bg-red-50 group-hover:bg-white/40 px-2 py-1 rounded-lg transition-colors duration-300">
                            Litbang 2</p>
                    </div>
                </div>
            </div>

            {{-- Wakasek Kurikulum --}}
            <div
                class="group bg-white rounded-2xl shadow border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-xl transition-all duration-300">
                <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                <div class="flex items-center gap-4 p-4">
                    <div
                        class="shrink-0 w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                            fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-red-900 text-sm">Wakasek Kurikulum</p>
                        <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">Nama
                            Wakasek Kurikulum</p>
                    </div>
                    <div class="shrink-0">
                        <p
                            class="text-xs font-semibold text-red-900 bg-red-50 group-hover:bg-white/40 px-2 py-1 rounded-lg transition-colors duration-300">
                            Litbang 3</p>
                    </div>
                </div>
            </div>

            {{-- Wakasek Sarpras --}}
            <div
                class="group bg-white rounded-2xl shadow border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-xl transition-all duration-300">
                <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                <div class="flex items-center gap-4 p-4">
                    <div
                        class="shrink-0 w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                            fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-red-900 text-sm">Wakasek Sarpras</p>
                        <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">Nama
                            Wakasek Sarpras</p>
                    </div>
                    <div class="shrink-0">
                        <p
                            class="text-xs font-semibold text-red-900 bg-red-50 group-hover:bg-white/40 px-2 py-1 rounded-lg transition-colors duration-300">
                            Litbang 4</p>
                    </div>
                </div>
            </div>

            {{-- Wakasek Asrama --}}
            <div
                class="group bg-white rounded-2xl shadow border border-gray-100 overflow-hidden hover:bg-linear-to-br hover:from-yellow-400 hover:to-yellow-500 hover:border-yellow-300 hover:shadow-xl transition-all duration-300">
                <div class="h-1 bg-linear-to-r from-red-800 to-red-600"></div>
                <div class="flex items-center gap-4 p-4">
                    <div
                        class="shrink-0 w-10 h-10 rounded-xl bg-red-50 group-hover:bg-white/40 flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-red-800 group-hover:text-red-900 transition-colors duration-300"
                            fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-red-900 text-sm">Wakasek Asrama</p>
                        <p class="text-gray-500 group-hover:text-red-800 text-xs transition-colors duration-300">Nama
                            Wakasek Asrama</p>
                    </div>
                    <div class="shrink-0">
                        <p
                            class="text-xs font-semibold text-red-900 bg-red-50 group-hover:bg-white/40 px-2 py-1 rounded-lg transition-colors duration-300">
                            Litbang 5</p>
                    </div>
                </div>
            </div>

        </div>{{-- END MOBILE --}}

    </div>
</section>
{{-- ============================================ --}}
{{-- STRUKTUR ORGANISASI SECTION END --}}
{{-- ============================================ --}}
