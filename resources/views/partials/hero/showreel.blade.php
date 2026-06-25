{{--
    Hero variant: SHOWREEL (Sports).
    Full-bleed muted video background with text overlaid. Motion sells the
    moment you land. Falls back to a poster image if no video given.
      - 'hero.video'  → mp4 path (muted autoplay loop)
      - 'hero.poster' → fallback / first-frame image (picsum fallback)
    On dark video, text is light; we tint the overlay for legibility.
--}}
@php
    $h = $brand['hero'];
    $poster = !empty($h['poster']) ? asset($h['poster'])
            : 'https://picsum.photos/seed/' . urlencode($brand['key'] . '-reelhero') . '/1600/900';
@endphp

<section class="hero hero--showreel" id="hero">

    <div class="hero__bg" aria-hidden="true">
        @if (!empty($h['video']))
            <video class="hero__video" autoplay muted loop playsinline poster="{{ $poster }}">
                <source src="{{ asset($h['video']) }}" type="video/mp4">
            </video>
        @else
            <img class="hero__video" src="{{ $poster }}" alt="">
        @endif
        <span class="hero__scrim"></span>
    </div>

    <div class="wrap hero__inner hero__inner--overlay">
        <span class="hero__eyebrow hero__eyebrow--light reveal">{{ $h['eyebrow'] ?? $brand['name'] }}</span>
        <h1 class="hero__title hero__title--light reveal" data-d="1">{!! $h['headline'] ?? e($brand['tagline']) !!}</h1>
        @if (!empty($h['lead']))
            <p class="hero__lead hero__lead--light reveal" data-d="2">{{ $h['lead'] }}</p>
        @endif
        <div class="hero__actions reveal" data-d="2">
            @if (!empty($h['cta']))
                <a href="{{ $h['cta']['href'] }}" class="btn btn--primary">{{ $h['cta']['label'] }}</a>
            @endif
            @if (!empty($h['cta_alt']))
                <a href="{{ $h['cta_alt']['href'] }}" class="btn btn--light">{{ $h['cta_alt']['label'] }}</a>
            @endif
        </div>
    </div>
</section>
