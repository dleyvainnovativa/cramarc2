{{--
    Stats section (CRAMARC Digital Marketing). Animated count-up KPIs from
    $brand['stats']. Renders ONLY if stats exist — so it never shows invented
    numbers. Use real client results before launch.

    Config shape:
      'stats_title' => '…', 'stats_lead' => '…',
      'stats' => [
          ['value' => 250, 'suffix' => '%', 'prefix' => '+', 'label' => 'Alcance promedio'],
          ['value' => 1.2, 'suffix' => 'M',                 'label' => 'Reproducciones'],
          ['value' => 80,  'suffix' => '+',                 'label' => 'Marcas atendidas'],
      ]
    app.js animates the count when the section scrolls into view.
--}}
@if (!empty($brand['stats']))
<section class="stats" id="resultados">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'Resultados',
        'title' => $brand['stats_title'] ?? 'Números que hablan',
        'lead' => $brand['stats_lead'] ?? null,
        ])

        <div class="stats__grid reveal-group">
            @foreach ($brand['stats'] as $stat)
            <div class="stat reveal">
                <span class="stat__value"
                    data-count="{{ $stat['value'] }}"
                    data-prefix="{{ $stat['prefix'] ?? '' }}"
                    data-suffix="{{ $stat['suffix'] ?? '' }}"
                    data-decimals="{{ (floor($stat['value']) != $stat['value']) ? 1 : 0 }}">
                    {{ $stat['prefix'] ?? '' }}0{{ $stat['suffix'] ?? '' }}
                </span>
                <span class="stat__label">{{ $stat['label'] }}</span>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif