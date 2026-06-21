{{--
    Packages / pricing tiers. One tier can be 'featured' to highlight it.
    Config:
      'packages_title' => '…', 'packages_lead' => '…',
      'packages' => [
          ['name' => '…', 'price' => '$X', 'unit' => '/sesión', 'features' => ['…','…'],
           'cta' => 'Cotizar', 'featured' => true],
          ...
      ]
    Prices are strings so you can write "Desde $1,500" etc.
--}}
@if (!empty($brand['packages']))
<section class="packages" id="paquetes">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Paquetes',
            'title'   => $brand['packages_title'] ?? 'Elige el paquete ideal',
            'lead'    => $brand['packages_lead'] ?? null,
        ])

        <div class="packages__grid reveal-group">
            @foreach ($brand['packages'] as $pkg)
                <div class="pkg reveal {{ !empty($pkg['featured']) ? 'is-featured' : '' }}">
                    @if (!empty($pkg['featured']))
                        <span class="pkg__badge">Más popular</span>
                    @endif
                    <span class="pkg__name">{{ $pkg['name'] }}</span>
                    <span class="pkg__price">
                        {{ $pkg['price'] }}
                        @if (!empty($pkg['unit']))<span class="pkg__unit">{{ $pkg['unit'] }}</span>@endif
                    </span>
                    @if (!empty($pkg['features']))
                        <ul class="pkg__features">
                            @foreach ($pkg['features'] as $feat)
                                <li><i class="fa-solid fa-check"></i> {{ $feat }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <a href="#contacto" class="btn {{ !empty($pkg['featured']) ? 'btn--primary' : 'btn--ghost' }} pkg__cta">
                        {{ $pkg['cta'] ?? 'Cotizar' }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
