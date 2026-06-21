{{--
    CTA band — the conversion beat before the footer. Centered, accent-driven.
    Copy from $brand['cta_band'] (config). The button is a mailto built from
    the brand contact email, so no backend is involved.
--}}
@php $contact = $brand['contact'] ?? []; @endphp

<section class="cta-band" id="contacto">
    <div class="wrap cta-band__inner">

        <h2 class="cta-band__title reveal">
            {!! $brand['cta_band']['headline'] ?? '¿Listo para <em>trabajar</em> con nosotros?' !!}
        </h2>

        @if (!empty($brand['cta_band']['lead']))
        <p class="cta-band__lead reveal" data-d="1">{{ $brand['cta_band']['lead'] }}</p>
        @endif

        @if (!empty($contact['email']))
        <a href="mailto:{{ $contact['email'] }}{{ !empty($brand['cta_band']['subject']) ? '?subject=' . rawurlencode($brand['cta_band']['subject']) : '' }}"
            class="btn btn--primary reveal" data-d="1">
            {{ $brand['cta_band']['button'] ?? 'Ponte en contacto' }}
        </a>
        @endif

    </div>
</section>