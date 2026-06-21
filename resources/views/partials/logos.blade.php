{{--
    Client logo marquee ("marcas que confían en CRAMARC"). Auto-scrolling,
    pure CSS infinite loop. Logos from $brand['logos']. The track is duplicated
    in markup so the scroll wraps seamlessly. Pauses on hover.

    Config shape:
      'logos_title' => '…',
      'logos' => [
          ['src' => 'images/clients/01.svg', 'alt' => 'Cliente 1'],
          ...   // 5+ looks best
      ]
    Greyscale by default, full color on hover.
--}}
@if (!empty($brand['logos']))
<section class="logos" id="marcas" aria-label="Marcas que confían en nosotros">
    <div class="wrap">
        <p class="logos__label">{{ $brand['logos_title'] ?? 'Marcas que confían en nosotros' }}</p>
    </div>

    <div class="logos__marquee">
        {{-- two identical tracks for a seamless loop --}}
        @for ($pass = 0; $pass < 2; $pass++)
            <ul class="logos__track" aria-hidden="{{ $pass === 1 ? 'true' : 'false' }}">
            @foreach ($brand['logos'] as $logo)
            <li class="logos__item">
                <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] ?? '' }}" loading="lazy">
            </li>
            @endforeach
            </ul>
            @endfor
    </div>
</section>
@endif