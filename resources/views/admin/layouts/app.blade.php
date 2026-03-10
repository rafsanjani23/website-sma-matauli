<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | Admin SMAN 1 Matauli</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.css" />
    <style>
        #crop-modal .cropper-container { max-height: 70vh; }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">

    {{-- Sidebar + Content --}}
    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-red-950 to-red-900 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 lg:static lg:inset-auto">

            {{-- Logo --}}
            <div class="flex items-center gap-3 px-6 py-5 border-b border-red-800/50">
                <div class="w-10 h-10 bg-yellow-400/20 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </div>
                <div>
                    <p class="text-white font-bold text-sm">Admin Panel</p>
                    <p class="text-red-300 text-xs">SMAN 1 Matauli</p>
                </div>
            </div>

            {{-- Navigation --}}
            <nav class="px-4 py-4 space-y-1 overflow-y-auto h-[calc(100vh-140px)]">

                {{-- Dashboard --}}
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200
                    {{ request()->routeIs('admin.dashboard') ? 'bg-white/15 text-white' : 'text-red-200 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Dashboard
                </a>

                <p class="px-3 pt-4 pb-1 text-xs font-bold tracking-widest uppercase text-red-400">Konten</p>

                @php
                    $menuItems = [
                        ['route' => 'admin.media.index', 'label' => 'Media', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />'],
                        ['route' => 'admin.prestasi.index', 'label' => 'Prestasi', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M18.75 4.236c.982.143 1.954.317 2.916.52A6.003 6.003 0 0 1 16.27 9.728M18.75 4.236V4.5c0 2.108-.966 3.99-2.48 5.228m0 0a6.003 6.003 0 0 1-4.77 0m4.77 0a6.003 6.003 0 0 1-4.77 0M12 15.75a6 6 0 0 1-6-6" />'],
                        ['route' => 'admin.testimoni.index', 'label' => 'Testimoni', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />'],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-all duration-200
                        {{ request()->routeIs($item['route']) ? 'bg-white/15 text-white' : 'text-red-200 hover:bg-white/10 hover:text-white' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <p class="px-3 pt-4 pb-1 text-xs font-bold tracking-widest uppercase text-red-400">Sekolah</p>

                @php
                    $sekolahItems = [
                        ['route' => 'admin.fasilitas-sekolah.index', 'label' => 'Fasilitas Sekolah'],
                        ['route' => 'admin.fasilitas-asrama.index', 'label' => 'Fasilitas Asrama'],
                        ['route' => 'admin.kegiatan-asrama.index', 'label' => 'Kegiatan Asrama'],
                        ['route' => 'admin.pimpinan.index', 'label' => 'Pimpinan'],
                        ['route' => 'admin.tenaga-pendidik.index', 'label' => 'Tenaga Pendidik'],
                        ['route' => 'admin.tenaga-kependidikan.index', 'label' => 'Tenaga Kependidikan'],
                        ['route' => 'admin.kemitraan.index', 'label' => 'Kemitraan'],
                    ];
                @endphp

                @foreach ($sekolahItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-all duration-200
                        {{ request()->routeIs($item['route']) ? 'bg-white/15 text-white' : 'text-red-200 hover:bg-white/10 hover:text-white' }}">
                        <span class="w-5 h-5 flex items-center justify-center">
                            <span class="w-1.5 h-1.5 bg-current rounded-full"></span>
                        </span>
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <p class="px-3 pt-4 pb-1 text-xs font-bold tracking-widest uppercase text-red-400">Alumni & Galeri</p>

                @php
                    $alumniItems = [
                        ['route' => 'admin.studi-lanjut.index', 'label' => 'Studi Lanjut'],
                        ['route' => 'admin.profesional.index', 'label' => 'Profesional'],
                        ['route' => 'admin.foto.index', 'label' => 'Foto'],
                        ['route' => 'admin.video.index', 'label' => 'Video'],
                    ];
                @endphp

                @foreach ($alumniItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-all duration-200
                        {{ request()->routeIs($item['route']) ? 'bg-white/15 text-white' : 'text-red-200 hover:bg-white/10 hover:text-white' }}">
                        <span class="w-5 h-5 flex items-center justify-center">
                            <span class="w-1.5 h-1.5 bg-current rounded-full"></span>
                        </span>
                        {{ $item['label'] }}
                    </a>
                @endforeach

            </nav>

            {{-- Logout --}}
            <div class="px-4 py-3 border-t border-red-800/50">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-red-200 hover:bg-white/10 hover:text-white transition-all duration-200 w-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        {{-- Overlay for mobile --}}
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden" onclick="toggleSidebar()"></div>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col min-h-screen lg:ml-0">

            {{-- Top Bar --}}
            <header class="bg-white shadow-sm border-b border-gray-200 px-4 md:px-6 py-3 flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-3">
                    {{-- Mobile Hamburger --}}
                    <button onclick="toggleSidebar()" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                    <h1 class="text-lg font-bold text-gray-900">@yield('title', 'Dashboard')</h1>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500">{{ Auth::guard('admin')->user()->username }}</span>
                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-red-800" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                </div>
            </header>

            {{-- Page Content --}}
            <main class="flex-1 p-4 md:p-6">

                {{-- Flash Messages --}}
                @if (session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </main>

        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>

    {{-- Image Crop Modal --}}
    <div id="crop-modal" class="fixed inset-0 z-[9999] hidden">
        <div class="absolute inset-0 bg-black/60" id="crop-overlay"></div>
        <div class="relative flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900">Crop Gambar</h3>
                    <p class="text-sm text-gray-500 mt-1">Atur area crop agar foto sejajar dengan foto lainnya</p>
                </div>
                <div class="p-4 bg-gray-900" style="max-height:70vh;overflow:hidden;">
                    <img id="crop-image" src="" alt="Crop" class="max-w-full" />
                </div>
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
                    <button type="button" id="crop-cancel" class="px-5 py-2.5 text-sm font-semibold text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition">Batal</button>
                    <button type="button" id="crop-confirm" class="px-5 py-2.5 text-sm font-semibold text-white bg-red-800 rounded-xl hover:bg-red-900 transition">Crop & Gunakan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.js"></script>
    <script>
    (function() {
        const modal = document.getElementById('crop-modal');
        const cropImage = document.getElementById('crop-image');
        let cropper = null;
        let activeInput = null;

        function openCropModal(file, input) {
            activeInput = input;
            const reader = new FileReader();
            reader.onload = function(e) {
                cropImage.src = e.target.result;
                modal.classList.remove('hidden');
                if (cropper) { cropper.destroy(); cropper = null; }
                cropImage.onload = function() {
                    cropper = new Cropper(cropImage, {
                        aspectRatio: 3 / 2,
                        viewMode: 1,
                        autoCropArea: 1,
                        responsive: true,
                    });
                };
            };
            reader.readAsDataURL(file);
        }

        function closeCropModal() {
            modal.classList.add('hidden');
            if (cropper) { cropper.destroy(); cropper = null; }
            cropImage.src = '';
        }

        // Cancel
        document.getElementById('crop-cancel').addEventListener('click', () => {
            // Reset the file input
            if (activeInput) activeInput.value = '';
            closeCropModal();
        });
        document.getElementById('crop-overlay').addEventListener('click', () => {
            if (activeInput) activeInput.value = '';
            closeCropModal();
        });

        // Confirm crop
        document.getElementById('crop-confirm').addEventListener('click', () => {
            if (!cropper || !activeInput) return;
            const canvas = cropper.getCroppedCanvas({
                maxWidth: 1920,
                maxHeight: 1920,
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
            canvas.toBlob(function(blob) {
                // Get original filename
                const origName = activeInput.files[0]?.name || 'cropped.jpg';
                const ext = origName.split('.').pop().toLowerCase();
                const mimeType = ['png'].includes(ext) ? 'image/png' : 'image/jpeg';
                const croppedFile = new File([blob], origName, { type: mimeType });

                // Replace file input using DataTransfer
                const dt = new DataTransfer();
                dt.items.add(croppedFile);
                activeInput.files = dt.files;

                // Show preview next to input
                showPreview(activeInput, blob);

                closeCropModal();
            }, 'image/jpeg', 0.92);
        });

        function showPreview(input, blob) {
            // Remove existing preview
            const existing = input.parentElement.querySelector('.crop-preview');
            if (existing) existing.remove();
            // Create preview
            const preview = document.createElement('div');
            preview.className = 'crop-preview mt-2 flex items-center gap-2';
            const img = document.createElement('img');
            img.src = URL.createObjectURL(blob);
            img.className = 'w-32 h-20 object-cover rounded-lg border border-gray-200';
            const badge = document.createElement('span');
            badge.className = 'text-xs text-green-700 bg-green-50 px-2 py-1 rounded-lg font-medium';
            badge.textContent = 'Cropped';
            preview.appendChild(img);
            preview.appendChild(badge);
            input.parentElement.appendChild(preview);
        }

        // Listen to all file inputs on page
        document.addEventListener('change', function(e) {
            const input = e.target;
            if (input.tagName !== 'INPUT' || input.type !== 'file') return;
            const file = input.files[0];
            if (!file || !file.type.startsWith('image/')) return;
            openCropModal(file, input);
        });
    })();
    </script>

</body>

</html>
