{{--
    Hero variant: CENTERED (default / parent).
    Text-led, big loop drawing behind. The brand statement hero.
--}}
<section class="hero hero--centered" id="hero">

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
                <a href="{{ $brand['hero']['cta']['href'] }}" class="btn btn--primary">{{ $brand['hero']['cta']['label'] }}</a>
            @endif
            @if (!empty($brand['hero']['cta_alt']))
                <a href="{{ $brand['hero']['cta_alt']['href'] }}" class="btn btn--ghost">{{ $brand['hero']['cta_alt']['label'] }}</a>
            @endif
        </div>

    </div>
</section>
