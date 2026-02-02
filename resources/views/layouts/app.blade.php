<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @hasSection('title')
            @yield('title') | SMAN 1 Matauli Pandan
        @else
            SMAN 1 Matauli Pandan
        @endif
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="relative">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
