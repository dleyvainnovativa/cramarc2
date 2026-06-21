{{--
    Contact — info block, no form (mailto architecture). Each row is
    actionable where it makes sense: email → mailto, phone → tel.
    Rows render only if present in $brand['contact'].

    Phase 5: rows grid is a .reveal-group (auto-stagger).
--}}
@php $contact = $brand['contact'] ?? []; @endphp

@if (!empty($contact))
<section class="contact" id="contacto-info">
    <div class="wrap">

        @include('partials.section-head', [
        'eyebrow' => 'Contacto',
        'title' => 'Hablemos',
        'lead' => $brand['contact_lead'] ?? 'Estamos para escucharte. Escríbenos o llámanos.',
        ])

        <div class="contact__rows reveal-group">
            @if (!empty($contact['email']))
            <a class="contact__row reveal" href="mailto:{{ $contact['email'] }}">
                <span class="contact__icon"><i class="fa-regular fa-envelope"></i></span>
                <span class="contact__meta">
                    <span class="contact__label">Correo</span>
                    <span class="contact__value">{{ $contact['email'] }}</span>
                </span>
            </a>
            @endif

            @if (!empty($contact['phone']))
            <a class="contact__row reveal" href="tel:{{ preg_replace('/[^+\d]/', '', $contact['phone']) }}">
                <span class="contact__icon"><i class="fa-solid fa-phone"></i></span>
                <span class="contact__meta">
                    <span class="contact__label">Teléfono</span>
                    <span class="contact__value">{{ $contact['phone'] }}</span>
                </span>
            </a>
            @endif

            @if (!empty($contact['location']))
            <div class="contact__row contact__row--static reveal">
                <span class="contact__icon"><i class="fa-solid fa-location-dot"></i></span>
                <span class="contact__meta">
                    <span class="contact__label">Ubicación</span>
                    <span class="contact__value">{{ $contact['location'] }}</span>
                </span>
            </div>
            @endif
        </div>

    </div>
</section>
@endif