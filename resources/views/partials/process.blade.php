{{--
    Process / "cómo funciona" — numbered steps with a connecting line.
    Config:
      'process_title' => '…', 'process_lead' => '…',
      'process' => [
          ['title' => 'Agenda', 'text' => '…', 'icon' => 'fa-calendar-check'],
          ...
      ]
--}}
@if (!empty($brand['process']))
<section class="process" id="proceso">
    <div class="wrap">
        @include('partials.section-head', [
            'eyebrow' => 'Cómo funciona',
            'title'   => $brand['process_title'] ?? 'Así trabajamos contigo',
            'lead'    => $brand['process_lead'] ?? null,
        ])

        <ol class="process__steps reveal-group">
            @foreach ($brand['process'] as $i => $step)
                <li class="process-step reveal">
                    <span class="process-step__num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    @if (!empty($step['icon']))
                        <span class="process-step__icon"><i class="fa-solid {{ $step['icon'] }}"></i></span>
                    @endif
                    <span class="process-step__title">{{ $step['title'] }}</span>
                    <span class="process-step__text">{{ $step['text'] }}</span>
                </li>
            @endforeach
        </ol>
    </div>
</section>
@endif
