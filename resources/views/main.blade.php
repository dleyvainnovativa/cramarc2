<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- per-brand SEO, driven by config (fleshed out in Phase 8) --}}
    <title>{{ $brand['meta']['title'] ?? $brand['name'] }}</title>
    <meta name="description" content="{{ $brand['meta']['description'] ?? '' }}">

    {{-- Google Fonts: Archivo (display) + Inter (body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Bootstrap 5 + theme via Vite --}}
    @vite(['resources/css/theme.css', 'resources/js/app.js'])

    @stack('head')
</head>
{{--
    The whole palette flows from these four CSS variables. Every brand
    renders the same markup; only these values change per subdomain.
--}}

<body
    data-brand="{{ $brand['key'] }}"
    style="
        --accent: {{ $brand['palette']['accent'] }};
        --accent-deep: {{ $brand['palette']['accent_deep'] }};
        --ink: {{ $brand['palette']['ink'] }};
        --paper: {{ $brand['palette']['paper'] }};
    ">

    @yield('content')

    @stack('scripts')
</body>

</html>