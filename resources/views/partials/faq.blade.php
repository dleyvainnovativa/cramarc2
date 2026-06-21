{{--
    FAQ accordion. Uses native <details>/<summary> so it works without JS and
    is accessible by default; app.js adds smooth height + single-open behavior.
    Config:
      'faq_title' => '…', 'faq_lead' => '…',
      'faq' => [ ['q' => '…', 'a' => '…'], ... ]
--}}
@if (!empty($brand['faq']))
<section class="faq" id="faq">
    <div class="wrap faq__wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Preguntas frecuentes',
            'title'   => $brand['faq_title'] ?? 'Lo que suelen preguntarnos',
            'lead'    => $brand['faq_lead'] ?? null,
        ])

        <div class="faq__list reveal-group" id="faq-list">
            @foreach ($brand['faq'] as $item)
                <details class="faq-item reveal">
                    <summary class="faq-item__q">
                        <span>{{ $item['q'] }}</span>
                        <i class="fa-solid fa-plus faq-item__icon"></i>
                    </summary>
                    <div class="faq-item__a"><p>{{ $item['a'] }}</p></div>
                </details>
            @endforeach
        </div>
    </div>
</section>
@endif
