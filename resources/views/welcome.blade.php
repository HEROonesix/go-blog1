<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="UfqLMCQ2PLjk7xQf18iSXji2gQa1R13XtLLZMpnO">

    <title>Go-blog</title>

    <link rel="shortcut icon" href="{{ asset('image/city.jpg') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <x-website.navbar />
    {{-- HERO --}}
    <x-website.hero />
    {{-- TABS --}}
    <x-website.tabs />
    {{-- Blog --}}
    <x-website.blog />
    {{-- gallery --}}
    <x-website.galeri />
    {{-- kontak --}}
    <x-website.kontak />
    {{-- footer --}}
    <x-website.footer />



</body>

</html>
