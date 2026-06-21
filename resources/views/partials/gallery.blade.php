{{--
    Gallery section (CRAMARC Sports). Responsive grid; click any image to open
    a lightbox. Images from $brand['gallery']. Lazy-loaded.

    Config shape:
      'gallery_title' => '…', 'gallery_lead' => '…',
      'gallery' => [
          ['src' => 'images/sports/01.jpg', 'alt' => '…', 'wide' => true],  // wide spans 2 cols
          ...
      ]
    Lightbox markup is a single reusable overlay; app.js wires the clicks.
--}}
@if (!empty($brand['gallery']))
<section class="gallery" id="galeria">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'Portafolio',
        'title' => $brand['gallery_title'] ?? 'Nuestro trabajo en cancha',
        'lead' => $brand['gallery_lead'] ?? 'Una muestra de lo que capturamos. Haz clic para ver en grande.',
        ])

        <div class="gallery__grid reveal-group">
            @foreach ($brand['gallery'] as $i => $img)
            <button type="button"
                class="gallery__item reveal {{ !empty($img['wide']) ? 'is-wide' : '' }}"
                data-full="{{ asset($img['src']) }}"
                data-caption="{{ $img['alt'] ?? '' }}"
                aria-label="Ampliar imagen{{ !empty($img['alt']) ? ': ' . $img['alt'] : '' }}">
                <img src="{{ asset($img['src']) }}"
                    alt="{{ $img['alt'] ?? '' }}"
                    loading="lazy">
            </button>
            @endforeach
        </div>

    </div>
</section>

{{-- single shared lightbox overlay --}}
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Imagen ampliada" hidden>
    <button class="lightbox__close" id="lightbox-close" aria-label="Cerrar">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <button class="lightbox__nav lightbox__nav--prev" id="lightbox-prev" aria-label="Anterior">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <figure class="lightbox__figure">
        <img src="" alt="" id="lightbox-img">
        <figcaption id="lightbox-cap"></figcaption>
    </figure>
    <button class="lightbox__nav lightbox__nav--next" id="lightbox-next" aria-label="Siguiente">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>
@endif