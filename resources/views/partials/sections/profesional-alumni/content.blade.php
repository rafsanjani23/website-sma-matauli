<section class="py-6">
    <div class="mx-auto max-w-7xl px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-2">
            @forelse ($items as $item)
                @php
                    $hasSocial = $item->link_facebook || $item->link_twitter || $item->link_linkedin;
                @endphp
                <div class="group relative bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                    {{-- Decorative top accent --}}
                    <div class="h-1.5 bg-gradient-to-r from-matauli-red-dark via-red-600 to-yellow-400"></div>

                    {{-- Photo --}}
                    <div class="relative w-full aspect-3/2 bg-gradient-to-br from-gray-100 to-gray-200 overflow-hidden">
                        @if ($item->foto)
                            <img src="{{ Storage::url($item->foto) }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                alt="{{ $item->nama }}" />
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-20 h-20 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                        @endif
                        @if ($item->angkatan)
                            <span class="absolute top-3 right-3 inline-flex items-center gap-1 bg-white/95 backdrop-blur-sm text-matauli-red-dark text-[11px] font-bold px-2.5 py-1 rounded-full shadow-sm">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342" />
                                </svg>
                                {{ $item->angkatan }}
                            </span>
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="p-4 flex flex-col flex-1">
                        <h4 class="text-slate-900 text-base font-bold leading-tight line-clamp-2">{{ $item->nama }}</h4>

                        @if ($item->nama_lembaga)
                            <div class="mt-2 flex items-start gap-1.5">
                                <svg class="w-3.5 h-3.5 text-matauli-red-dark mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3h.75m-.75 3h.75m-.75 3h.75" />
                                </svg>
                                <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">{{ $item->nama_lembaga }}</p>
                            </div>
                        @endif

                        {{-- Footer with socials --}}
                        @if ($hasSocial)
                            <div class="mt-auto pt-3 border-t border-gray-100 flex items-center gap-2">
                                @if ($item->link_facebook)
                                    <a href="{{ $item->link_facebook }}" target="_blank" rel="noopener" aria-label="Facebook"
                                        class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="currentColor" viewBox="0 0 155.139 155.139">
                                            <path d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($item->link_twitter)
                                    <a href="{{ $item->link_twitter }}" target="_blank" rel="noopener" aria-label="Twitter"
                                        class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-sky-50 text-sky-500 hover:bg-sky-500 hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($item->link_linkedin)
                                    <a href="{{ $item->link_linkedin }}" target="_blank" rel="noopener" aria-label="LinkedIn"
                                        class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-blue-50 text-[#0077b5] hover:bg-[#0077b5] hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-400">{{ __('Belum ada data.') }}</div>
            @endforelse
        </div>
    </div>
</section>
