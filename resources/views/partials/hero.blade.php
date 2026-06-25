{{--
    Hero router. Each brand picks its hero layout via config:
        'hero_variant' => 'centered' | 'split' | 'showreel'
    Defaults to 'centered' (the parent / brand-statement hero).

    All variants read the same $brand['hero'] keys (eyebrow, headline, lead,
    cta, cta_alt), so copy stays config-driven; only the LAYOUT changes.
    Variant-specific extras:
        split    → 'hero.media' (image src) OR 'hero.embed' (Kuula/iframe URL)
        showreel → 'hero.video' (mp4 path) OR 'hero.embed' (+ 'hero.poster')
--}}
@php
$variant = $brand['hero_variant'] ?? 'centered';
$allowed = ['centered', 'split', 'showreel'];
if (!in_array($variant, $allowed, true)) {
$variant = 'centered';
}
@endphp

@include('partials.hero.' . $variant)