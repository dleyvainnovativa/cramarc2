{{--
    Testimonials — quote cards. Avatar uses the provided image or a picsum
    placeholder seeded by name so it's stable across reloads.
    Config:
      'testimonials_title' => '…',
      'testimonials' => [
          ['quote' => '…', 'name' => '…', 'role' => '…', 'avatar' => 'images/…'],
          ...
      ]
--}}
@if (!empty($brand['testimonials']))
<section class="testimonials" id="testimonios">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Testimonios',
            'title'   => $brand['testimonials_title'] ?? 'Lo que dicen de nosotros',
            'lead'    => $brand['testimonials_lead'] ?? null,
        ])

        <div class="testimonials__grid reveal-group">
            @foreach ($brand['testimonials'] as $t)
                @php
                    $avatar = !empty($t['avatar'])
                        ? asset($t['avatar'])
                        : 'https://picsum.photos/seed/' . urlencode($t['name'] ?? 'cramarc') . '/96/96';
                @endphp
                <figure class="tcard reveal">
                    <i class="fa-solid fa-quote-left tcard__mark"></i>
                    <blockquote class="tcard__quote">{{ $t['quote'] }}</blockquote>
                    <figcaption class="tcard__who">
                        <img class="tcard__avatar" src="{{ $avatar }}" alt="{{ $t['name'] ?? '' }}" loading="lazy">
                        <span class="tcard__meta">
                            <span class="tcard__name">{{ $t['name'] ?? '' }}</span>
                            @if (!empty($t['role']))<span class="tcard__role">{{ $t['role'] }}</span>@endif
                        </span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>
@endif
