<?php

/*
|------------------------------------------------------------------------------
| Phase 2 — hero copy per brand
|------------------------------------------------------------------------------
| Add a 'hero' array to EACH brand in config/brands.php. Below are ready-to-
| paste blocks. The 'headline' value is rendered with {!! !!} so the <em>
| accent span works — this is SAFE because it's author-controlled config,
| never user input. Do not pipe request data into 'headline'.
|
| <em> renders in the accent color (see .hero__title em in theme).
|----------------------------------------------------------------------------*/

// ---- parent ----------------------------------------------------------------
return [
    'hero' => [
        'eyebrow'  => 'Grupo empresarial',
        'headline' => 'Un grupo,<br><em>negocios conectados</em>',
        'lead'     => 'Construimos y operamos compañías que comparten una misma filosofía: calidad, continuidad y resultados que perduran.',
        'cta'      => ['label' => 'Conoce nuestras empresas', 'href' => '#empresas'],
        'cta_alt'  => ['label' => 'Quiénes somos', 'href' => '#nosotros'],
    ],

    // ---- a ---------------------------------------------------------------------
    'hero' => [
        'eyebrow'  => 'División A',
        'headline' => 'Titular de <em>Empresa A</em>',
        'lead'     => 'Descripción de la propuesta de valor de Empresa A en una o dos líneas.',
        'cta'      => ['label' => 'Conócenos', 'href' => '#nosotros'],
        'cta_alt'  => ['label' => 'Contacto', 'href' => '#contacto'],
    ],

    // ---- b ---------------------------------------------------------------------
    'hero' => [
        'eyebrow'  => 'División B',
        'headline' => 'Titular de <em>Empresa B</em>',
        'lead'     => 'Descripción de la propuesta de valor de Empresa B en una o dos líneas.',
        'cta'      => ['label' => 'Conócenos', 'href' => '#nosotros'],
        'cta_alt'  => ['label' => 'Contacto', 'href' => '#contacto'],
    ],

    // ---- c ---------------------------------------------------------------------
    'hero' => [
        'eyebrow'  => 'División C',
        'headline' => 'Titular de <em>Empresa C</em>',
        'lead'     => 'Descripción de la propuesta de valor de Empresa C en una o dos líneas.',
        'cta'      => ['label' => 'Conócenos', 'href' => '#nosotros'],
        'cta_alt'  => ['label' => 'Contacto', 'href' => '#contacto'],
    ],
];
