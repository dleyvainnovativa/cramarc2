{{--
    Before/After comparison slider (CRAMARC Tours: flat photo vs immersive tour).
    Drag the handle to wipe between two images. app.js wires the drag.
    Config:
      'beforeafter_title' => '…', 'beforeafter_lead' => '…',
      'beforeafter' => [
          'before' => 'images/…', 'after' => 'images/…',   // picsum fallback if absent
          'before_label' => 'Foto tradicional', 'after_label' => 'Recorrido 360°',
      ]
--}}
@if (!empty($brand['beforeafter']))
@php
    $ba = $brand['beforeafter'];
    $before = !empty($ba['before']) ? asset($ba['before']) : 'https://picsum.photos/seed/before/1200/750?grayscale';
    $after  = !empty($ba['after'])  ? asset($ba['after'])  : 'https://picsum.photos/seed/after/1200/750';
@endphp
<section class="ba" id="comparativa">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'La diferencia',
            'title'   => $brand['beforeafter_title'] ?? 'Una foto vs un recorrido',
            'lead'    => $brand['beforeafter_lead'] ?? 'Arrastra para comparar. Lo que tu comprador realmente quiere explorar.',
        ])

        <div class="ba__widget reveal" id="ba-widget">
            <img class="ba__img ba__img--after" src="{{ $after }}" alt="{{ $ba['after_label'] ?? 'Después' }}" draggable="false">
            <div class="ba__clip" id="ba-clip">
                <img class="ba__img ba__img--before" src="{{ $before }}" alt="{{ $ba['before_label'] ?? 'Antes' }}" draggable="false">
            </div>
            <span class="ba__tag ba__tag--before">{{ $ba['before_label'] ?? 'Antes' }}</span>
            <span class="ba__tag ba__tag--after">{{ $ba['after_label'] ?? 'Después' }}</span>
            <div class="ba__handle" id="ba-handle">
                <i class="fa-solid fa-chevron-left"></i><i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </div>
</section>
@endif
