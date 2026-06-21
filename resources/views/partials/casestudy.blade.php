{{--
    Case study / "proyecto destacado" — one client story, more convincing than
    raw stats. Two-column: image + problem/solution/result.
    Config:
      'casestudy' => [
          'client' => '…', 'image' => 'images/…' (picsum fallback),
          'title' => '…',
          'problem' => '…', 'solution' => '…',
          'result_value' => '+320%', 'result_label' => 'en interacción',
      ]
--}}
@if (!empty($brand['casestudy']))
@php
    $cs = $brand['casestudy'];
    $img = !empty($cs['image']) ? asset($cs['image'])
         : 'https://picsum.photos/seed/' . urlencode(($cs['client'] ?? 'case') . '-case') . '/900/1100';
@endphp
<section class="casestudy" id="caso">
    <div class="wrap casestudy__inner">

        <div class="casestudy__media reveal">
            <img src="{{ $img }}" alt="{{ $cs['client'] ?? 'Proyecto destacado' }}" loading="lazy">
            @if (!empty($cs['result_value']))
                <div class="casestudy__badge">
                    <span class="casestudy__badge-val">{{ $cs['result_value'] }}</span>
                    @if (!empty($cs['result_label']))<span class="casestudy__badge-lbl">{{ $cs['result_label'] }}</span>@endif
                </div>
            @endif
        </div>

        <div class="casestudy__body reveal" data-d="1">
            <span class="section-head__eyebrow">Proyecto destacado</span>
            @if (!empty($cs['client']))<span class="casestudy__client">{{ $cs['client'] }}</span>@endif
            <h2 class="casestudy__title">{{ $cs['title'] ?? 'Cómo lo logramos' }}</h2>

            @if (!empty($cs['problem']))
                <div class="casestudy__block">
                    <span class="casestudy__lbl">El reto</span>
                    <p>{{ $cs['problem'] }}</p>
                </div>
            @endif
            @if (!empty($cs['solution']))
                <div class="casestudy__block">
                    <span class="casestudy__lbl">Lo que hicimos</span>
                    <p>{{ $cs['solution'] }}</p>
                </div>
            @endif

            <a href="#contacto" class="btn btn--primary casestudy__cta">Quiero resultados así</a>
        </div>

    </div>
</section>
@endif
