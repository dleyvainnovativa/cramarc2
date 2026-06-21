{{--
    Floating WhatsApp button. Renders if the brand has a whatsapp number.
    Config:
      'whatsapp' => ['number' => '522291234567', 'message' => 'Hola, vengo del sitio…']
    number = full international, digits only (52 + 10 digits for MX mobile).
--}}
@if (!empty($brand['whatsapp']['number']))
@php
    $waNum = preg_replace('/\D/', '', $brand['whatsapp']['number']);
    $waMsg = rawurlencode($brand['whatsapp']['message'] ?? ('Hola, vengo del sitio de ' . $brand['name']));
@endphp
<a class="wa-float"
   href="https://wa.me/{{ $waNum }}?text={{ $waMsg }}"
   target="_blank" rel="noopener"
   aria-label="Escríbenos por WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="wa-float__label">WhatsApp</span>
</a>
@endif
