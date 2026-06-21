{{--
    Equipment / "nuestro equipo" — builds credibility (gear is the
    differentiator for all three brands).
    Config:
      'equipment_title' => '…', 'equipment_lead' => '…',
      'equipment' => [ ['name' => 'DJI Mavic 3', 'spec' => 'Dron · 5.1K', 'icon' => 'fa-helicopter'], ... ]
--}}
@if (!empty($brand['equipment']))
<section class="equipment" id="equipo">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Nuestro equipo',
            'title'   => $brand['equipment_title'] ?? 'Herramientas de nivel profesional',
            'lead'    => $brand['equipment_lead'] ?? 'La herramienta correcta para cada toma.',
        ])

        <div class="equipment__grid reveal-group">
            @foreach ($brand['equipment'] as $gear)
                <div class="gear reveal">
                    <span class="gear__icon"><i class="fa-solid {{ $gear['icon'] ?? 'fa-camera' }}"></i></span>
                    <span class="gear__name">{{ $gear['name'] }}</span>
                    @if (!empty($gear['spec']))<span class="gear__spec">{{ $gear['spec'] }}</span>@endif
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
