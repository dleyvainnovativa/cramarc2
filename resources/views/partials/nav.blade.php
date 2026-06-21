{{--
    Site navigation — desktop inline links + a full-screen offcanvas on mobile.
    The offcanvas reveals with a circular clip-path wipe, staggers its oversized
    links in, and pins direct-contact info at the bottom. IDs (#site-nav,
    #nav-burger, #offcanvas) are bound in app.js.

    Links are defined once here and rendered in BOTH the desktop bar and the
    offcanvas so there's a single source of truth.
--}}
@php
$navLinks = [
['href' => '#empresas', 'label' => 'Empresas'],
['href' => '#nosotros', 'label' => 'Nosotros'],
['href' => '#contacto', 'label' => 'Contacto'],
];
$contact = $brand['contact'] ?? [];
@endphp

<nav id="site-nav" class="site-nav">
    <div class="wrap site-nav__inner">

        <a href="#top" class="site-nav__brand" aria-label="{{ $brand['name'] }} — inicio">
            <span class="site-nav__mark">@include('partials.loop')</span>
            <span>{{ $brand['name'] }}</span>
        </a>

        {{-- desktop inline links --}}
        <div class="site-nav__desktop">
            @foreach ($navLinks as $link)
            <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
            @endforeach
            <a href="#contacto" class="cta">Hablemos</a>
        </div>

        {{-- mobile burger --}}
        <button id="nav-burger" class="nav-burger" aria-label="Abrir menú"
            aria-expanded="false" aria-controls="offcanvas">
            <span class="nav-burger__box"><span></span><span></span><span></span></span>
        </button>

    </div>
</nav>

{{-- full-screen offcanvas (mobile) --}}
<div id="offcanvas" class="offcanvas" role="dialog" aria-modal="true" aria-label="Menú de navegación">
    <span class="offcanvas__loop" aria-hidden="true">@include('partials.loop')</span>

    <div class="offcanvas__inner">
        <nav class="offcanvas__nav" aria-label="Principal">
            @foreach ($navLinks as $i => $link)
            <a class="offcanvas__link" href="{{ $link['href'] }}">
                <span class="offcanvas__num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <span class="txt">{{ $link['label'] }}</span>
            </a>
            @endforeach
            <a class="offcanvas__link is-cta" href="#contacto">
                <span class="offcanvas__num">{{ str_pad(count($navLinks) + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <span class="txt">Hablemos</span>
                <i class="fa-solid fa-arrow-right arrow"></i>
            </a>
        </nav>
    </div>

    @if (!empty($contact['email']) || !empty($contact['phone']))
    <div class="offcanvas__foot">
        <span class="offcanvas__foot-label">Contacto directo</span>
        <div class="offcanvas__contacts">
            @if (!empty($contact['email']))
            <a href="mailto:{{ $contact['email'] }}">
                <i class="fa-regular fa-envelope"></i> {{ $contact['email'] }}
            </a>
            @endif
            @if (!empty($contact['phone']))
            <a href="tel:{{ preg_replace('/[^+\d]/', '', $contact['phone']) }}">
                <i class="fa-solid fa-phone"></i> {{ $contact['phone'] }}
            </a>
            @endif
        </div>
    </div>
    @endif
</div>