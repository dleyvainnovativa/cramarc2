{{--
    Parent showcase — the reason the holding page exists. Each sub-brand gets
    real presence: its own accent across the whole card, an index, and a clear
    way through to its site. This is the page's centerpiece, so it's visually
    weightier than a standard section grid.
--}}
<section class="showcase" id="empresas">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'El grupo',
        'title' => $brand['children_title'] ?? 'Una familia de empresas',
        'lead' => $brand['children_lead']
        ?? 'Compañías independientes que comparten una misma filosofía. Conócelas.',
        ])

        <div class="showcase__grid reveal-group">
            @foreach ($brand['children'] as $i => $child)
            <a class="showcase-card reveal"
                href="{{ $child['url'] ?? '#' }}"
                style="--c: {{ $child['accent'] ?? 'var(--accent)' }}"
                @if(!empty($child['url']) && \Illuminate\Support\Str::startsWith($child['url'], 'http' )) target="_blank" rel="noopener" @endif>

                <span class="showcase-card__index">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>

                <span class="showcase-card__mark" aria-hidden="true">
                    @include('partials.loop')
                </span>

                <span class="showcase-card__body">
                    @if (!empty($child['tag']))
                    <span class="showcase-card__tag">{{ $child['tag'] }}</span>
                    @endif
                    <span class="showcase-card__name">{{ $child['name'] }}</span>
                    <span class="showcase-card__blurb">{{ $child['blurb'] }}</span>
                </span>

                <span class="showcase-card__go">
                    Visitar <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>
            @endforeach
        </div>

    </div>
</section>