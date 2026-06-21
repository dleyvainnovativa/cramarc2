{{--
    Hero — first impression. Reads $brand['hero'] from config so each brand
    controls its own headline/lead/CTA. The large loop sits behind the text
    (decorative, aria-hidden) and draws its stroke on load. Reveal classes
    are picked up by the IntersectionObserver in app.js; the headline also
    fades up immediately since it's above the fold.

    Expected config shape (added in Phase 2 — see SETUP):
      'hero' => [
          'lead'    => '…',
          'cta'     => ['label' => '…', 'href' => '#empresas'],
          'cta_alt' => ['label' => '…', 'href' => '#nosotros'],
          // headline rendered from tagline with {accent} markers, see below
      ]
--}}
<section class="hero" id="hero">

    <span class="hero__loop" aria-hidden="true">@include('partials.loop')</span>

    <div class="wrap hero__inner">

        <span class="hero__eyebrow reveal">{{ $brand['hero']['eyebrow'] ?? $brand['name'] }}</span>

        <h1 class="hero__title reveal" data-d="1">
            {!! $brand['hero']['headline'] ?? e($brand['tagline']) !!}
        </h1>

        @if (!empty($brand['hero']['lead']))
        <p class="hero__lead reveal" data-d="2">{{ $brand['hero']['lead'] }}</p>
        @endif

        <div class="hero__actions reveal" data-d="2">
            @if (!empty($brand['hero']['cta']))
            <a href="{{ $brand['hero']['cta']['href'] }}" class="btn btn--primary">
                {{ $brand['hero']['cta']['label'] }}
            </a>
            @endif
            @if (!empty($brand['hero']['cta_alt']))
            <a href="{{ $brand['hero']['cta_alt']['href'] }}" class="btn btn--ghost">
                {{ $brand['hero']['cta_alt']['label'] }}
            </a>
            @endif
        </div>

    </div>
</section>