{{--
    Disciplines strip (CRAMARC Sports) — "yes, we shoot your sport".
    Compact icon chips. Config:
      'disciplines_title' => '…',
      'disciplines' => [ ['name' => 'Fútbol', 'icon' => 'fa-futbol'], ... ]
--}}
@if (!empty($brand['disciplines']))
<section class="disciplines" id="disciplinas">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Disciplinas',
            'title'   => $brand['disciplines_title'] ?? 'Deportes que cubrimos',
            'lead'    => $brand['disciplines_lead'] ?? 'Si compites, lo capturamos.',
        ])

        <div class="disciplines__chips reveal-group">
            @foreach ($brand['disciplines'] as $d)
                <span class="chip reveal">
                    <i class="fa-solid {{ $d['icon'] ?? 'fa-medal' }}"></i>
                    {{ $d['name'] }}
                </span>
            @endforeach
        </div>
    </div>
</section>
@endif
