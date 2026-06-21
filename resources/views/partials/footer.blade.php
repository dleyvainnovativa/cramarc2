{{--
    Site footer. On a sub-brand, shows a "Parte de Grupo" link back to the
    parent domain (sells the holding structure). On the parent itself, that
    cross-link is omitted. $brand['key'] === 'parent' is the switch.
--}}
<footer class="site-footer">
    <div class="wrap site-footer__inner">

        <a href="#top" class="site-footer__brand" aria-label="{{ $brand['name'] }}">
            <span class="site-footer__mark">@include('partials.loop')</span>
            <span>{{ $brand['name'] }}</span>
        </a>

        <nav class="site-footer__links" aria-label="Pie de página">
            <a href="#empresas">Empresas</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#contacto">Contacto</a>
        </nav>

        @if ($brand['key'] !== 'parent')
        <a href="{{ config('brands.parent.url', '/') }}" class="site-footer__parent">
            Parte de <strong>{{ config('brands.parent.name') }}</strong>
        </a>
        @endif

    </div>

    <div class="wrap site-footer__base">
        <small>© {{ date('Y') }} {{ $brand['name'] }}. Todos los derechos reservados.</small>
    </div>
</footer>