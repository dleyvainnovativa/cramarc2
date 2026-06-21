{{--
    "Nosotros" — the shared philosophy, on a dark band. Values from
    $brand['values']. A loop divider sits just above, threading the brand
    mark between sections. Numbered markers are a real ordered list here.

    Phase 5: values grid is a .reveal-group (auto-stagger).
--}}
@if (!empty($brand['values']))

<div class="loop-divider reveal" aria-hidden="true">
    @include('partials.loop')
</div>

<section class="nosotros" id="nosotros">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'Lo que nos une',
        'title' => $brand['values_title'] ?? 'Nuestra filosofía',
        'lead' => $brand['values_lead'] ?? null,
        ])

        <div class="nosotros__grid reveal-group">
            @foreach ($brand['values'] as $i => $value)
            <div class="value reveal">
                <span class="value__num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <h3 class="value__title">{{ $value['title'] }}</h3>
                <p class="value__text">{{ $value['text'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif