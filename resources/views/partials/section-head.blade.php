{{--
    Reusable section header. Pass eyebrow / title / lead.
    Used by every content section so spacing + type stay consistent.

    @include('partials.section-head', [
        'eyebrow' => '…', 'title' => '…', 'lead' => '…',  // lead optional
    ])
--}}
<div class="section-head reveal">
    @if (!empty($eyebrow))
    <span class="section-head__eyebrow">{{ $eyebrow }}</span>
    @endif
    <h2 class="section-head__title">{{ $title }}</h2>
    @if (!empty($lead))
    <p class="section-head__lead">{{ $lead }}</p>
    @endif
</div>