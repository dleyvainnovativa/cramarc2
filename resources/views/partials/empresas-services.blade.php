{{--
    Sub-brand services grid. Same .card styling used on the parent's standard
    grid previously; a sub-brand lists its own offer here, in its own accent.
--}}
<section class="empresas" id="empresas">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'Qué hacemos',
        'title' => 'Nuestros servicios',
        'lead' => 'Soluciones diseñadas para resolver lo que tu negocio necesita.',
        ])

        <div class="empresas__grid reveal-group">
            @foreach ($brand['services'] as $service)
            <article class="card reveal" style="--c: var(--accent)">
                @if (!empty($service['tag']))
                <span class="card__tag">{{ $service['tag'] }}</span>
                @endif
                <h3 class="card__title">{{ $service['name'] }}</h3>
                <p class="card__blurb">{{ $service['blurb'] }}</p>
            </article>
            @endforeach
        </div>

    </div>
</section>