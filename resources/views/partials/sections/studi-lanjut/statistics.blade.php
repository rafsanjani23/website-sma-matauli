<section class="py-10 bg-white">
    <div class="mx-auto max-w-5xl px-4">
        <h2 class="text-center text-xl md:text-2xl font-bold text-slate-900 mb-2">Distribusi Studi Lanjut Alumni</h2>
        <p class="text-center text-sm text-gray-500 mb-10">Total {{ $total }} alumni tercatat</p>

        @php
            $categories = [
                'TNI-Polri'  => ['color' => '#16a34a', 'label' => 'TNI / POLRI'],
                'Kedinasan'  => ['color' => '#2563eb', 'label' => 'Kedinasan'],
                'PTN'        => ['color' => '#dc2626', 'label' => 'PTN'],
                'PTS'        => ['color' => '#f59e0b', 'label' => 'PTS'],
                'PTLN'       => ['color' => '#7c3aed', 'label' => 'PTLN'],
            ];
            $radius = 80;
            $circumference = 2 * 3.14159 * $radius;
            $currentOffset = 0;
        @endphp

        <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-16">
            <!-- Donut Chart -->
            <div class="relative w-56 h-56 md:w-72 md:h-72 shrink-0">
                <svg class="w-full h-full -rotate-90" viewBox="0 0 200 200">
                    <!-- Background circle -->
                    <circle cx="100" cy="100" r="{{ $radius }}" fill="none" stroke="#e5e7eb" stroke-width="24" />

                    <!-- Segments -->
                    @foreach ($categories as $key => $config)
                        @php
                            $pct = $percentages[$key] ?? 0;
                            $segmentLength = $circumference * $pct / 100;
                        @endphp
                        @if ($pct > 0)
                            <circle cx="100" cy="100" r="{{ $radius }}" fill="none"
                                stroke="{{ $config['color'] }}" stroke-width="24"
                                stroke-dasharray="{{ $segmentLength }} {{ $circumference - $segmentLength }}"
                                stroke-dashoffset="{{ -$currentOffset }}" />
                        @endif
                        @php $currentOffset += $segmentLength; @endphp
                    @endforeach
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span class="text-3xl md:text-4xl font-bold text-slate-800">{{ $total }}</span>
                    <span class="text-xs md:text-sm text-gray-500">Alumni</span>
                </div>
            </div>

            <!-- Legend -->
            <div class="flex flex-col gap-3">
                @foreach ($categories as $key => $config)
                    @php $pct = $percentages[$key] ?? 0; @endphp
                    <div class="flex items-center gap-3">
                        <span class="w-4 h-4 rounded-full shrink-0" style="background-color: {{ $config['color'] }}"></span>
                        <span class="text-sm md:text-base font-semibold text-slate-700 w-28">{{ $config['label'] }}</span>
                        <span class="text-sm md:text-base font-bold text-slate-900">{{ $pct }}%</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
