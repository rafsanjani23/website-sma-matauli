{{-- ============================================ --}}
{{-- JADWAL KEGIATAN HARIAN ASRAMA (SLIDER) --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -left-40 w-125 h-125 bg-red-100/30 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-yellow-100/30 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-16 md:py-24">
        {{-- Header --}}
        <div class="text-center mb-12 md:mb-16">
            <p class="text-red-800 text-sm font-semibold tracking-widest uppercase mb-2">
                {{ __('Rutinitas Harian') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                {{ __('Jadwal Kegiatan Asrama') }}
            </h2>
            <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-sm md:text-base">
                {{ __('Jadwal kegiatan harian siswa SMAN 1 MATAULI Pandan selama tinggal di asrama.') }}
            </p>
        </div>

        @php
            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
            $jadwal = [
                [
                    ['04.45 - 05.45', 'Bangun Pagi, Ibadah, Bersih-bersih Kamar/Barak, Mandi'],
                    ['06.00 - 06.30', 'Makan Pagi'],
                    ['06.30 - 07.00', 'Apel Pagi di Asrama'],
                    ['07.00 - 07.30', 'Apel Pagi / Upacara Bendera'],
                    ['07.30 - 12.30', 'KBM di Sekolah'],
                    ['12.30 - 14.00', 'Makan Siang'],
                    ['14.00 - 17.15', 'KBM di Sekolah'],
                    ['17.15 - 18.00', 'Olahraga Sore'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Belajar Malam'],
                    ['21.00 - 22.00', 'Apel Malam'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
                [
                    ['04.45 - 05.45', 'Bangun Pagi, Ibadah, Bersih-bersih Kamar/Barak, Mandi'],
                    ['06.00 - 06.30', 'Makan Pagi'],
                    ['06.30 - 07.00', 'Apel Pagi di Asrama'],
                    ['07.00 - 07.30', 'Apel Pagi'],
                    ['07.30 - 12.30', 'KBM di Sekolah'],
                    ['12.30 - 14.00', 'Makan Siang'],
                    ['14.00 - 17.15', 'KBM di Sekolah'],
                    ['17.15 - 18.00', 'Olahraga Sore'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Belajar Malam'],
                    ['21.00 - 22.00', 'Apel Malam'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
                [
                    ['04.45 - 05.45', 'Bangun Pagi, Ibadah, Bersih-bersih Kamar/Barak, Mandi'],
                    ['06.00 - 06.30', 'Makan Pagi'],
                    ['06.30 - 07.00', 'Apel Pagi di Asrama'],
                    ['07.00 - 07.30', 'Apel Pagi'],
                    ['07.30 - 14.00', 'KBM di Sekolah'],
                    ['14.00 - 14.30', 'Makan Siang'],
                    ['14.30 - 15.30', 'Istirahat Siang'],
                    ['15.30 - 18.00', 'Kokurikuler'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Belajar Malam'],
                    ['21.00 - 22.00', 'Apel Malam'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
                [
                    ['04.45 - 05.45', 'Bangun Pagi, Ibadah, Bersih-bersih Kamar/Barak, Mandi'],
                    ['06.00 - 06.30', 'Makan Pagi'],
                    ['06.30 - 07.00', 'Apel Pagi di Asrama'],
                    ['07.00 - 07.30', 'Apel Pagi'],
                    ['07.30 - 12.30', 'KBM di Sekolah'],
                    ['13.00 - 13.15', 'Makan Siang'],
                    ['13.30 - 15.30', 'Istirahat Siang'],
                    ['16.00 - 18.00', 'Kokurikuler'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Yasinan / Ibadah'],
                    ['21.00 - 22.00', 'Apel Malam'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
                [
                    ['04.45 - 05.45', 'Bangun Pagi, Ibadah, Bersih-bersih Kamar/Barak, Mandi'],
                    ['06.00 - 06.20', 'Makan Pagi'],
                    ['06.30 - 07.00', 'Apel Pagi di Asrama'],
                    ['07.00 - 07.30', 'Apel Pagi'],
                    ['07.30 - 11.45', 'KBM di Sekolah'],
                    ['11.45 - 13.30', 'Sholat Jumat / Ibadah'],
                    ['13.30 - 14.00', 'Makan Siang'],
                    ['14.00 - 15.00', 'Istirahat Siang'],
                    ['15.00 - 18.00', 'PBB / Ekstrakurikuler'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Belajar Malam'],
                    ['21.00 - 22.00', 'Apel Malam'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
                [
                    ['04.45 - 05.45', 'Bangun Pagi, Ibadah, Bersih-bersih Kamar/Barak, Mandi'],
                    ['06.00 - 06.20', 'Makan Pagi'],
                    ['06.30 - 07.00', 'Apel Pagi di Asrama'],
                    ['07.00 - 08.15', 'Apel Wali Kelas & Wali Asuh'],
                    ['08.15 - 11.45', 'KBM di Sekolah'],
                    ['11.45 - 13.30', 'Istirahat Siang'],
                    ['13.30 - 14.00', 'Makan Siang'],
                    ['14.00 - 15.00', 'Istirahat Siang'],
                    ['15.00 - 18.00', 'PBB / Ekstrakurikuler'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Apel Wali Asuh Asrama / Nobar'],
                    ['21.00 - 22.00', 'Apel Lorong'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
                [
                    ['04.45 - 07.00', 'Bangun Pagi, Ibadah, Olahraga Pagi'],
                    ['07.00 - 07.30', 'Makan Pagi'],
                    ['07.30 - 08.30', 'Bersih-bersih'],
                    ['08.00 - 14.00', 'Pesiar'],
                    ['14.00 - 14.30', 'Makan Siang'],
                    ['14.30 - 16.00', 'Pesiar / Istirahat Siang'],
                    ['16.00 - 18.00', 'Kegiatan Mandiri'],
                    ['18.00 - 19.00', 'Mandi / Ibadah'],
                    ['19.00 - 19.30', 'Makan Malam'],
                    ['19.30 - 21.00', 'Belajar Malam'],
                    ['21.00 - 22.00', 'Apel Malam'],
                    ['22.00 - 04.45', 'Istirahat Malam'],
                ],
            ];
        @endphp

        {{-- Slider Container --}}
        <div id="jadwal-slider" class="max-w-4xl mx-auto">
            {{-- Day Pills + Arrows --}}
            <div class="flex items-center justify-center gap-3 mb-8">
                <button onclick="jadwalSlider.prev()"
                    class="w-10 h-10 rounded-full bg-gray-100 hover:bg-red-800 hover:text-white text-gray-500 flex items-center justify-center transition-all duration-300 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <div class="flex flex-wrap justify-center gap-2">
                    @foreach ($days as $i => $day)
                        <button onclick="jadwalSlider.goTo({{ $i }})" id="day-pill-{{ $i }}"
                            class="day-pill px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ $i === 0 ? 'bg-red-800 text-white shadow-lg scale-105' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            {{ __($day) }}
                        </button>
                    @endforeach
                </div>

                <button onclick="jadwalSlider.next()"
                    class="w-10 h-10 rounded-full bg-gray-100 hover:bg-red-800 hover:text-white text-gray-500 flex items-center justify-center transition-all duration-300 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            {{-- Tabel Slides --}}
            @foreach ($days as $i => $day)
                <div id="jadwal-slide-{{ $i }}" class="jadwal-slide rounded-2xl overflow-hidden shadow-sm border border-gray-100 transition-all duration-300" style="{{ $i !== 0 ? 'display:none;' : '' }}">
                    <div class="bg-red-800 px-6 py-3 flex items-center justify-between">
                        <h3 class="text-white font-bold text-lg tracking-wide">{{ __($day) }}</h3>
                        <span class="text-white/60 text-sm">{{ $i + 1 }} / {{ count($days) }}</span>
                    </div>
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider w-40">{{ __('Waktu') }}</th>
                                <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">{{ __('Kegiatan') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($jadwal[$i] as $j => $item)
                                <tr class="{{ $j % 2 === 0 ? 'bg-white' : 'bg-gray-50/50' }} hover:bg-yellow-50/50 transition-colors">
                                    <td class="px-6 py-3 text-red-800 font-mono font-semibold text-sm whitespace-nowrap">{{ $item[0] }}</td>
                                    <td class="px-6 py-3 text-gray-700 text-sm">{{ __($item[1]) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach

            {{-- Dot Indicators --}}
            <div class="flex justify-center gap-2 mt-6">
                @foreach ($days as $i => $day)
                    <button onclick="jadwalSlider.goTo({{ $i }})" id="jadwal-dot-{{ $i }}"
                        class="jadwal-dot h-2 rounded-full transition-all duration-300 {{ $i === 0 ? 'bg-red-800 w-6' : 'bg-gray-300 w-2' }}"></button>
                @endforeach
            </div>
        </div>

        {{-- Keterangan --}}
        <div class="max-w-4xl mx-auto mt-8">
            <div class="bg-yellow-50 border border-yellow-200 rounded-xl px-6 py-4">
                <p class="text-yellow-800 text-sm">
                    <span class="font-semibold">{{ __('Keterangan:') }}</span>
                    {{ __('Tanggal merah selain hari Minggu, kegiatan disesuaikan dengan kebutuhan.') }}
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    const jadwalSlider = {
        active: 0,
        total: {{ count($days) }},

        goTo(index) {
            document.querySelectorAll('.jadwal-slide').forEach(el => {
                el.style.display = 'none';
                el.style.opacity = '0';
            });

            document.querySelectorAll('.day-pill').forEach((el, i) => {
                if (i === index) {
                    el.className = 'day-pill px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-red-800 text-white shadow-lg scale-105';
                } else {
                    el.className = 'day-pill px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-600 hover:bg-gray-200';
                }
            });

            document.querySelectorAll('.jadwal-dot').forEach((el, i) => {
                if (i === index) {
                    el.className = 'jadwal-dot h-2 rounded-full transition-all duration-300 bg-red-800 w-6';
                } else {
                    el.className = 'jadwal-dot h-2 rounded-full transition-all duration-300 bg-gray-300 w-2';
                }
            });

            const slide = document.getElementById('jadwal-slide-' + index);
            slide.style.display = 'block';
            setTimeout(() => { slide.style.opacity = '1'; }, 10);

            this.active = index;
        },

        prev() {
            this.goTo(this.active > 0 ? this.active - 1 : this.total - 1);
        },

        next() {
            this.goTo(this.active < this.total - 1 ? this.active + 1 : 0);
        }
    };
</script>