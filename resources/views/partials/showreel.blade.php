{{--
    Showreel — a video band. Two modes:
      - 'embed' (YouTube/Vimeo): click poster → loads iframe (no autoplay weight)
      - 'file'  (mp4): muted autoplay loop background with overlaid title
    Config:
      'showreel' => [
          'mode'    => 'embed',                  // 'embed' | 'file'
          'src'     => 'https://www.youtube.com/embed/XXXX',  // embed URL or mp4 path
          'poster'  => 'images/…' (optional; picsum fallback),
          'title'   => '…', 'subtitle' => '…',
      ]
--}}
@if (!empty($brand['showreel']['src']))
@php
    $sr = $brand['showreel'];
    $poster = !empty($sr['poster']) ? asset($sr['poster'])
            : 'https://picsum.photos/seed/' . urlencode($brand['key'] . '-reel') . '/1280/720';
@endphp
<section class="showreel" id="showreel">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Showreel',
            'title'   => $sr['title'] ?? 'Míranos en acción',
            'lead'    => $sr['subtitle'] ?? null,
        ])
    </div>

    <div class="wrap">
        <div class="showreel__frame reveal">
            @if (($sr['mode'] ?? 'embed') === 'file')
                <video class="showreel__video" autoplay muted loop playsinline poster="{{ $poster }}">
                    <source src="{{ asset($sr['src']) }}" type="video/mp4">
                </video>
            @else
                <button class="showreel__play" data-embed="{{ $sr['src'] }}"
                        style="background-image:url('{{ $poster }}')"
                        aria-label="Reproducir video">
                    <span class="showreel__btn"><i class="fa-solid fa-play"></i></span>
                </button>
            @endif
        </div>
    </div>
</section>
@endif
