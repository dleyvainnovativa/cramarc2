{{--
    Virtual tours section (CRAMARC Tours). Renders Kuula 360 embeds from
    $brand['tours']. Each tour is a responsive 16:9 frame. Iframes are
    lazy-loaded (loading="lazy") so multiple embeds don't block first paint.

    Config shape:
      'tours_title' => '…', 'tours_lead' => '…',
      'tours' => [
          ['title' => 'Casa en …', 'src' => 'https://kuula.co/share/...', 'caption' => '…'],
          ...
      ]
    The `src` is the URL from Kuula's iframe embed code (the part inside src="").
--}}
@if (!empty($brand['tours']))
<section class="tours" id="tours">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'Recorridos en vivo',
        'title' => $brand['tours_title'] ?? 'Explora un recorrido 360°',
        'lead' => $brand['tours_lead'] ?? 'Arrastra para mirar en cualquier dirección. Así recorren tus compradores la propiedad.',
        ])

        <div class="tours__grid reveal-group">
            @foreach ($brand['tours'] as $tour)
            <figure class="tour reveal">
                <div class="tour__frame">
                    <iframe
                        class="ku-embed"
                        src="{{ $tour['src'] }}"
                        frameborder="0"
                        scrolling="no"
                        loading="lazy"
                        allowfullscreen
                        allow="xr-spatial-tracking; gyroscope; accelerometer"
                        title="{{ $tour['title'] ?? 'Recorrido virtual 360' }}"></iframe>
                </div>
                @if (!empty($tour['title']) || !empty($tour['caption']))
                <figcaption class="tour__cap">
                    @if (!empty($tour['title']))<span class="tour__title">{{ $tour['title'] }}</span>@endif
                    @if (!empty($tour['caption']))<span class="tour__sub">{{ $tour['caption'] }}</span>@endif
                </figcaption>
                @endif
            </figure>
            @endforeach
        </div>

    </div>
</section>
@endif