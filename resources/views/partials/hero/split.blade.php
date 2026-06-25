{{--
    Hero variant: SPLIT (Marketing, Tours).
    Text left, media right. Media is either:
      - 'hero.embed' → a live iframe (Kuula 360 for Tours) — interactive in-hero
      - 'hero.media' → an image (picsum fallback)
    For Tours, embedding a Kuula tour here means the visitor can drag a 360°
    the instant they land. Strongest possible first impression for that brand.
--}}
@php
    $h = $brand['hero'];
    $hasEmbed = !empty($h['embed']);
    $img = !empty($h['media']) ? asset($h['media'])
         : 'https://picsum.photos/seed/' . urlencode($brand['key'] . '-hero') . '/900/1100';
@endphp

<section class="hero hero--split" id="hero">
    <div class="wrap hero__split">

        <div class="hero__col hero__col--text">
            <span class="hero__eyebrow reveal">{{ $h['eyebrow'] ?? $brand['name'] }}</span>
            <h1 class="hero__title reveal" data-d="1">{!! $h['headline'] ?? e($brand['tagline']) !!}</h1>
            @if (!empty($h['lead']))
                <p class="hero__lead reveal" data-d="2">{{ $h['lead'] }}</p>
            @endif
            <div class="hero__actions reveal" data-d="2">
                @if (!empty($h['cta']))
                    <a href="{{ $h['cta']['href'] }}" class="btn btn--primary">{{ $h['cta']['label'] }}</a>
                @endif
                @if (!empty($h['cta_alt']))
                    <a href="{{ $h['cta_alt']['href'] }}" class="btn btn--ghost">{{ $h['cta_alt']['label'] }}</a>
                @endif
            </div>
        </div>

        <div class="hero__col hero__col--media reveal" data-d="1">
            @if ($hasEmbed)
                <div class="hero__media-frame hero__media-frame--embed">
                    <iframe
                        class="ku-embed"
                        src="{{ $h['embed'] }}"
                        frameborder="0" scrolling="no" loading="lazy" allowfullscreen
                        allow="xr-spatial-tracking; gyroscope; accelerometer"
                        title="{{ $h['embed_title'] ?? 'Recorrido 360' }}"></iframe>
                    @if (!empty($h['embed_badge']))
                        <span class="hero__media-badge"><i class="fa-solid fa-vr-cardboard"></i> {{ $h['embed_badge'] }}</span>
                    @endif
                </div>
            @else
                <div class="hero__media-frame">
                    <img src="{{ $img }}" alt="{{ $h['media_alt'] ?? $brand['name'] }}" loading="lazy">
                </div>
            @endif
            {{-- small loop accent peeking behind the media --}}
            <span class="hero__media-loop" aria-hidden="true">@include('partials.loop')</span>
        </div>

    </div>
</section>
