<?php

/*
|------------------------------------------------------------------------------
| CRAMARC — Brand Definitions
|------------------------------------------------------------------------------
| Single source of truth. ResolveBrand maps the request subdomain to a key:
|   cramarc.com    → parent
|   a.cramarc.com  → CRAMARC Digital Marketing
|   b.cramarc.com  → CRAMARC Sports
|   c.cramarc.com  → CRAMARC Tours
|
| Palette strategy: orange stays the house color (parent + marketing arm), so
| the group reads as one family; sports and real-estate arms get their own
| accents suited to their field while sharing the same ink/paper base.
|----------------------------------------------------------------------------*/

return [

    /* =========================================================
     | PARENT — CRAMARC (the holding company)
     ========================================================= */
    'parent' => [
        'name'    => 'CRAMARC',
        'url'     => '/',
        'tagline' => 'Una productora, tres formas de contar tu historia',

        'palette' => [
            'accent'      => '#D6451F',
            'accent_deep' => '#B23314',
            'ink'         => '#161412',
            'paper'       => '#FAF8F5',
        ],

        'logo' => 'images/logo.svg',

        'meta' => [
            'title'       => 'CRAMARC — Producción audiovisual y contenido visual',
            'description' => 'CRAMARC es un grupo de producción visual: marketing digital, deporte profesional y recorridos virtuales. Una misma exigencia de calidad en cada toma.',
        ],

        'hero' => [
            'eyebrow'  => 'Grupo de producción visual',
            'headline' => 'Una productora,<br><em>tres formas de contar tu historia</em>',
            'lead'     => 'Marketing digital, deporte profesional y recorridos virtuales. Tres empresas especializadas, una misma exigencia detrás de cada toma.',
            'cta'      => ['label' => 'Conoce nuestras empresas', 'href' => '#empresas'],
            'cta_alt'  => ['label' => 'Quiénes somos', 'href' => '#nosotros'],
        ],

        'children_title' => 'Una familia de productoras',
        'children_lead'  => 'Tres especialidades bajo un mismo estándar. Cada una domina lo suyo; todas comparten el mismo ojo.',

        'children' => [
            [
                'name'   => 'CRAMARC Digital Marketing',
                'tag'    => 'Marketing & contenido',
                'blurb'  => 'Fotografía, video y tomas con dron para redes y negocios. Contenido que hace que tu marca destaque.',
                'url'    => '?brand=a',
                'accent' => '#D6451F',
            ],
            [
                'name'   => 'ATHLETICS CRAMARC',
                'tag'    => 'Deporte profesional',
                'blurb'  => 'Foto y video deportivo para atletas profesionales. Capturamos cada jugada con calidad de transmisión.',
                'url'    => '?brand=b',
                'accent' => '#1F8F4D',
            ],
            [
                'name'   => 'VISORA',
                'tag'    => 'Recorridos virtuales',
                'blurb'  => 'Tours virtuales 360° y tomas aéreas con dron para bienes raíces. Tu propiedad, recorrible desde cualquier lugar.',
                'url'    => '?brand=c',
                'accent' => '#2563EB',
            ],
        ],

        'values_title' => 'Lo que nos une',
        'values_lead'  => 'La forma de trabajar que comparte cada empresa del grupo.',
        'values' => [
            ['title' => 'Una sola exigencia', 'text' => 'El mismo estándar de calidad recorre las tres productoras, sin importar el sector.'],
            ['title' => 'Equipo profesional', 'text' => 'Drones, cámaras y postproducción de nivel transmisión. La herramienta correcta para cada toma.'],
            ['title' => 'Especialización real', 'text' => 'Cada empresa domina su campo. No somos generalistas: somos especialistas reunidos.'],
        ],

        'cta_band' => [
            'headline' => '¿Tienes un proyecto <em>en mente</em>?',
            'lead'     => 'Cuéntanos qué necesitas y te conectamos con la productora indicada del grupo.',
            'button'   => 'Hablemos',
            'subject'  => 'Contacto desde cramarc.com',
        ],
        'contact_lead' => 'Estamos para escucharte. Escríbenos o llámanos.',
        'contact' => [
            'email'    => 'hola@cramarc.com',
            'phone'    => '+52 229 000 0000',
            'location' => 'Veracruz, México',
        ],
        'whatsapp' => [
            'number'  => '522291234567',                 // 52 + 10-digit MX mobile — REPLACE
            'message' => 'Hola CRAMARC, vengo del sitio y me interesa…',
        ],
        'faq_title' => 'Lo que suelen preguntarnos',
        'faq' => [
            ['q' => '¿En cuánto tiempo entregan?', 'a' => 'Depende del proyecto, pero la mayoría de entregas están listas entre 48 y 72 horas tras la grabación.'],
            ['q' => '¿Trabajan fuera de Veracruz?', 'a' => 'Sí. Cubrimos todo el estado y nos desplazamos a otras ciudades según el proyecto.'],
            ['q' => '¿El equipo de dron está certificado?', 'a' => 'Sí, operamos con piloto certificado y respetamos las zonas de vuelo permitidas.'],
            ['q' => '¿Cómo se cotiza?', 'a' => 'Cuéntanos qué necesitas por WhatsApp o correo y te enviamos una propuesta a la medida.'],
        ],
        /* ===== SHARED: Testimonials (avatars use picsum if no image given) ===== */
        'testimonials_title' => 'Lo que dicen de nosotros',
        'testimonials' => [
            ['quote' => 'El material superó lo que esperábamos. Subió muchísimo el engagement de nuestras redes.', 'name' => 'Laura Méndez', 'role' => 'Marketing, Grupo Norte'],
            ['quote' => 'Profesionales de principio a fin. La calidad se nota en cada toma.', 'name' => 'Carlos Ibáñez', 'role' => 'Atleta profesional'],
            ['quote' => 'Los recorridos 360 nos ayudaron a cerrar ventas sin tantas visitas. Una herramienta enorme.', 'name' => 'Patricia Soto', 'role' => 'Asesora inmobiliaria'],
        ],

        /* ===== SHARED: Equipment (tailor list per brand) ===== */
        'equipment_title' => 'Herramientas de nivel profesional',
        'equipment' => [
            ['name' => 'DJI Mavic 3 Pro', 'spec' => 'Dron · 5.1K', 'icon' => 'fa-helicopter'],
            ['name' => 'Sony A7S III', 'spec' => 'Cámara · 4K 120fps', 'icon' => 'fa-camera'],
            ['name' => 'Insta360 X4', 'spec' => '360° · 8K', 'icon' => 'fa-panorama'],
            ['name' => 'Estabilización', 'spec' => 'Gimbal profesional', 'icon' => 'fa-video'],
        ],
        'hero_variant' => 'centered',
    ],


    /* =========================================================
     | A — CRAMARC Digital Marketing
     ========================================================= */
    'a' => [
        'name'    => 'CRAMARC Digital Marketing',
        'url'     => 'https://a.cramarc.com',
        'tagline' => 'Contenido visual que hace crecer tu marca',

        'palette' => [
            'accent'      => '#D6451F',
            'accent_deep' => '#B23314',
            'ink'         => '#161412',
            'paper'       => '#FAF8F5',
        ],

        'logo' => 'images/logo-a.svg',

        'meta' => [
            'title'       => 'CRAMARC Digital Marketing — Foto, video y dron para tu marca',
            'description' => 'Producción de contenido visual para redes y negocios: fotografía, video, social media y tomas aéreas con dron. Contenido que destaca.',
        ],
        'hero_variant' => 'split',
        'hero' => [
            'eyebrow'  => 'Marketing & contenido',
            'headline' => 'Contenido que <em>hace crecer</em> tu marca',
            'lead'     => 'Fotografía, video y tomas con dron para redes sociales y negocios de cualquier giro. Producimos el contenido que tu marca necesita para destacar.',
            'cta'      => ['label' => 'Ver lo que hacemos', 'href' => '#empresas'],
            'cta_alt'  => ['label' => 'Contáctanos', 'href' => '#contacto'],
            // 'media'     => 'images/hero/marketing.jpg',   // picsum fallback if omitted
            'media_alt' => 'Producción de contenido CRAMARC',
        ],

        'services' => [
            ['name' => 'Foto y video para redes', 'tag' => 'Social media', 'blurb' => 'Contenido optimizado para Instagram, TikTok y Facebook. Producción constante que mantiene tu marca activa.'],
            ['name' => 'Tomas aéreas con dron', 'tag' => 'Dron', 'blurb' => 'Perspectivas que solo se logran desde el aire. Ideal para instalaciones, eventos y campañas que necesitan impacto.'],
            ['name' => 'Producción para negocios', 'tag' => 'Comercial', 'blurb' => 'Sesiones de producto, servicio e instalaciones para cualquier giro. Material profesional listo para usar.'],
        ],

        'values_title' => 'Cómo trabajamos',
        'values' => [
            ['title' => 'Contenido con propósito', 'text' => 'No producimos por producir. Cada toma responde a un objetivo de tu marca.'],
            ['title' => 'Ritmo constante', 'text' => 'Las redes no descansan. Te acompañamos con producción continua, no esporádica.'],
            ['title' => 'Listo para publicar', 'text' => 'Entregamos material editado y optimizado para cada plataforma.'],
        ],

        'cta_band' => [
            'headline' => 'Hagamos que tu marca <em>destaque</em>',
            'lead'     => 'Cuéntanos sobre tu negocio y armamos el contenido que necesitas.',
            'button'   => 'Solicita una cotización',
            'subject'  => 'Cotización — CRAMARC Digital Marketing',
        ],
        'contact_lead' => 'Cuéntanos sobre tu proyecto.',
        'contact' => [
            'email'    => 'marketing@cramarc.com',
            'phone'    => '+52 229 000 0001',
            'location' => 'Veracruz, México',
        ],
        'stats_title' => 'Resultados que hablan',
        'stats_lead'  => 'Lo que el contenido bien hecho logra para nuestros clientes.',
        'stats' => [
            ['value' => 250, 'prefix' => '+', 'suffix' => '%', 'label' => 'Alcance promedio en redes'],   // REPLACE w/ real
            ['value' => 1.2, 'suffix' => 'M',                  'label' => 'Reproducciones generadas'],     // REPLACE w/ real
            ['value' => 80,  'prefix' => '+',                  'label' => 'Marcas atendidas'],             // REPLACE w/ real
        ],
        'logos_title' => 'Marcas que confían en CRAMARC',
        'logos' => [
            ['src' => 'images/clients/01.svg', 'alt' => 'Cliente 1'],
            ['src' => 'images/clients/02.svg', 'alt' => 'Cliente 2'],
            ['src' => 'images/clients/03.svg', 'alt' => 'Cliente 3'],
            ['src' => 'images/clients/04.svg', 'alt' => 'Cliente 4'],
            ['src' => 'images/clients/05.svg', 'alt' => 'Cliente 5'],
            ['src' => 'images/clients/06.svg', 'alt' => 'Cliente 6'],
        ],
        'whatsapp' => [
            'number'  => '522291234567',                 // 52 + 10-digit MX mobile — REPLACE
            'message' => 'Hola CRAMARC, vengo del sitio y me interesa…',
        ],
        'faq_title' => 'Lo que suelen preguntarnos',
        'faq' => [
            ['q' => '¿En cuánto tiempo entregan?', 'a' => 'Depende del proyecto, pero la mayoría de entregas están listas entre 48 y 72 horas tras la grabación.'],
            ['q' => '¿Trabajan fuera de Veracruz?', 'a' => 'Sí. Cubrimos todo el estado y nos desplazamos a otras ciudades según el proyecto.'],
            ['q' => '¿El equipo de dron está certificado?', 'a' => 'Sí, operamos con piloto certificado y respetamos las zonas de vuelo permitidas.'],
            ['q' => '¿Cómo se cotiza?', 'a' => 'Cuéntanos qué necesitas por WhatsApp o correo y te enviamos una propuesta a la medida.'],
        ],
        /* ===== SHARED: Testimonials (avatars use picsum if no image given) ===== */
        'testimonials_title' => 'Lo que dicen de nosotros',
        'testimonials' => [
            ['quote' => 'El material superó lo que esperábamos. Subió muchísimo el engagement de nuestras redes.', 'name' => 'Laura Méndez', 'role' => 'Marketing, Grupo Norte'],
            ['quote' => 'Profesionales de principio a fin. La calidad se nota en cada toma.', 'name' => 'Carlos Ibáñez', 'role' => 'Atleta profesional'],
            ['quote' => 'Los recorridos 360 nos ayudaron a cerrar ventas sin tantas visitas. Una herramienta enorme.', 'name' => 'Patricia Soto', 'role' => 'Asesora inmobiliaria'],
        ],

        /* ===== SHARED: Equipment (tailor list per brand) ===== */
        'equipment_title' => 'Herramientas de nivel profesional',
        'equipment' => [
            ['name' => 'DJI Mavic 3 Pro', 'spec' => 'Dron · 5.1K', 'icon' => 'fa-helicopter'],
            ['name' => 'Sony A7S III', 'spec' => 'Cámara · 4K 120fps', 'icon' => 'fa-camera'],
            ['name' => 'Insta360 X4', 'spec' => '360° · 8K', 'icon' => 'fa-panorama'],
            ['name' => 'Estabilización', 'spec' => 'Gimbal profesional', 'icon' => 'fa-video'],
        ],
        /* ===== A · DIGITAL MARKETING ===== */
        // process
        'process_title' => 'Así trabajamos contigo',
        'process' => [
            ['title' => 'Descubrimiento', 'text' => 'Entendemos tu marca, objetivos y audiencia.', 'icon' => 'fa-magnifying-glass'],
            ['title' => 'Producción', 'text' => 'Grabamos foto y video con el plan definido.', 'icon' => 'fa-clapperboard'],
            ['title' => 'Edición', 'text' => 'Postproducción optimizada por plataforma.', 'icon' => 'fa-wand-magic-sparkles'],
            ['title' => 'Entrega', 'text' => 'Recibes el material listo para publicar.', 'icon' => 'fa-share-nodes'],
        ],
        // case study
        'casestudy' => [
            'client' => 'Grupo Norte',
            'title' => 'De cero presencia a marca referente',
            'problem' => 'Tenían redes inactivas y poca identidad visual frente a su competencia.',
            'solution' => 'Diseñamos un plan de contenido mensual con foto, video y tomas aéreas, publicando de forma constante.',
            'result_value' => '+320%',
            'result_label' => 'en interacción',
            // 'image' => 'images/cases/grupo-norte.jpg',  // picsum fallback if omitted
        ],
        // packages
        'packages_title' => 'Planes de contenido',
        'packages' => [
            ['name' => 'Esencial', 'price' => '$4,500', 'unit' => '/mes', 'features' => ['1 sesión mensual', '15 fotos editadas', '2 reels'], 'cta' => 'Empezar'],
            ['name' => 'Crecimiento', 'price' => '$8,900', 'unit' => '/mes', 'features' => ['2 sesiones mensuales', '40 fotos editadas', '5 reels', 'Tomas con dron'], 'cta' => 'El más elegido', 'featured' => true],
            ['name' => 'Marca total', 'price' => 'A medida', 'features' => ['Producción ilimitada', 'Estrategia dedicada', 'Cobertura de eventos'], 'cta' => 'Cotizar'],
        ],
    ],


    /* =========================================================
     | B — CRAMARC Sports
     ========================================================= */
    'b' => [
        'name'    => 'ATHLETICS CRAMARC',
        'url'     => 'https://b.cramarc.com',
        'tagline' => 'Cada jugada, con calidad de transmisión',

        'palette' => [
            'accent'      => '#1F8F4D',
            'accent_deep' => '#16703C',
            'ink'         => '#161412',
            'paper'       => '#FAF8F5',
        ],

        'logo' => 'images/logo-b.svg',

        'meta' => [
            'title'       => 'CRAMARC Sports — Foto y video para atletas profesionales',
            'description' => 'Fotografía y video deportivo para atletas profesionales. Capturamos cada jugada con calidad de transmisión para tu marca personal y tu carrera.',
        ],
        'hero_variant' => 'showreel',
        'hero' => [
            'eyebrow'  => 'Deporte profesional',
            'headline' => 'Cada jugada, con <em>calidad de transmisión</em>',
            'lead'     => 'Fotografía y video deportivo para atletas profesionales. Capturamos tu juego con el detalle y la intensidad que tu carrera merece.',
            'cta'      => ['label' => 'Ver lo que hacemos', 'href' => '#empresas'],
            'cta_alt'  => ['label' => 'Contáctanos', 'href' => '#contacto'],
            // 'video'  => 'videos/sports-reel.mp4',         // muted autoplay loop; keep it short + light (<8s, <4MB ideal)
            // 'poster' => 'images/hero/sports-poster.jpg',  // shows before/while video loads (picsum fallback)
        ],

        'services' => [
            ['name' => 'Cobertura de partidos', 'tag' => 'En cancha', 'blurb' => 'Foto y video en vivo de tus partidos y competencias. Capturamos los momentos que definen el juego.'],
            ['name' => 'Sesiones para atletas', 'tag' => 'Marca personal', 'blurb' => 'Material profesional para tu marca personal, patrocinadores y redes. Tu imagen, a la altura de tu nivel.'],
            ['name' => 'Highlights y reels', 'tag' => 'Postproducción', 'blurb' => 'Edición de jugadas y resúmenes listos para mostrar a equipos, reclutadores y patrocinadores.'],
        ],

        'values_title' => 'Cómo trabajamos',
        'values' => [
            ['title' => 'Conocemos el deporte', 'text' => 'Anticipamos la jugada porque entendemos el juego, no solo la cámara.'],
            ['title' => 'Calidad de transmisión', 'text' => 'Equipo y técnica de nivel profesional para que cada toma se vea como TV.'],
            ['title' => 'Pensado en tu carrera', 'text' => 'Material que te sirve para crecer: patrocinios, reclutadores y afición.'],
        ],

        'cta_band' => [
            'headline' => 'Lleva tu imagen al <em>siguiente nivel</em>',
            'lead'     => 'Cuéntanos sobre tu disciplina y armamos la cobertura ideal.',
            'button'   => 'Agenda una sesión',
            'subject'  => 'Contacto — CRAMARC Sports',
        ],
        'contact_lead' => 'Cuéntanos sobre tu disciplina.',
        'contact' => [
            'email'    => 'sports@cramarc.com',
            'phone'    => '+52 229 000 0002',
            'location' => 'Veracruz, México',
        ],
        'gallery_title' => 'Nuestro trabajo en cancha',
        'gallery_lead'  => 'Una muestra de lo que capturamos. Haz clic para ver en grande.',
        'gallery' => [
            ['src' => 'https://static.photos/sport/640x360?id=1', 'alt' => 'Salto de clavados en competencia', 'wide' => true],
            ['src' => 'https://static.photos/sport/640x360?id=2', 'alt' => 'Futbolista rematando de cabeza'],
            ['src' => 'https://static.photos/sport/640x360?id=3', 'alt' => 'Corredora cruzando la meta'],
            ['src' => 'https://static.photos/sport/640x360?id=4', 'alt' => 'Boxeador en el ring'],
            ['src' => 'https://static.photos/sport/640x360?id=5', 'alt' => 'Equipo celebrando', 'wide' => true],
            ['src' => 'https://static.photos/sport/640x360?id=6', 'alt' => 'Tenista sacando'],
            // ['src' => 'images/sports/01.jpg', 'alt' => 'Salto de clavados en competencia', 'wide' => true],
            // ['src' => 'images/sports/02.jpg', 'alt' => 'Futbolista rematando de cabeza'],
            // ['src' => 'images/sports/03.jpg', 'alt' => 'Corredora cruzando la meta'],
            // ['src' => 'images/sports/04.jpg', 'alt' => 'Boxeador en el ring'],
            // ['src' => 'images/sports/05.jpg', 'alt' => 'Equipo celebrando', 'wide' => true],
            // ['src' => 'images/sports/06.jpg', 'alt' => 'Tenista sacando'],
        ],
        'whatsapp' => [
            'number'  => '522291234567',                 // 52 + 10-digit MX mobile — REPLACE
            'message' => 'Hola CRAMARC, vengo del sitio y me interesa…',
        ],
        'faq_title' => 'Lo que suelen preguntarnos',
        'faq' => [
            ['q' => '¿En cuánto tiempo entregan?', 'a' => 'Depende del proyecto, pero la mayoría de entregas están listas entre 48 y 72 horas tras la grabación.'],
            ['q' => '¿Trabajan fuera de Veracruz?', 'a' => 'Sí. Cubrimos todo el estado y nos desplazamos a otras ciudades según el proyecto.'],
            ['q' => '¿El equipo de dron está certificado?', 'a' => 'Sí, operamos con piloto certificado y respetamos las zonas de vuelo permitidas.'],
            ['q' => '¿Cómo se cotiza?', 'a' => 'Cuéntanos qué necesitas por WhatsApp o correo y te enviamos una propuesta a la medida.'],
        ],
        /* ===== SHARED: Testimonials (avatars use picsum if no image given) ===== */
        'testimonials_title' => 'Lo que dicen de nosotros',
        'testimonials' => [
            ['quote' => 'El material superó lo que esperábamos. Subió muchísimo el engagement de nuestras redes.', 'name' => 'Laura Méndez', 'role' => 'Marketing, Grupo Norte'],
            ['quote' => 'Profesionales de principio a fin. La calidad se nota en cada toma.', 'name' => 'Carlos Ibáñez', 'role' => 'Atleta profesional'],
            ['quote' => 'Los recorridos 360 nos ayudaron a cerrar ventas sin tantas visitas. Una herramienta enorme.', 'name' => 'Patricia Soto', 'role' => 'Asesora inmobiliaria'],
        ],

        /* ===== SHARED: Equipment (tailor list per brand) ===== */
        'equipment_title' => 'Herramientas de nivel profesional',
        'equipment' => [
            ['name' => 'DJI Mavic 3 Pro', 'spec' => 'Dron · 5.1K', 'icon' => 'fa-helicopter'],
            ['name' => 'Sony A7S III', 'spec' => 'Cámara · 4K 120fps', 'icon' => 'fa-camera'],
            ['name' => 'Insta360 X4', 'spec' => '360° · 8K', 'icon' => 'fa-panorama'],
            ['name' => 'Estabilización', 'spec' => 'Gimbal profesional', 'icon' => 'fa-video'],
        ],

        /* ===== B · SPORTS ===== */
        'showreel' => [
            'mode' => 'embed',
            'src' => 'https://www.youtube.com/embed/ScMzIvxBSi4',  // REPLACE with their reel
            'title' => 'Míranos en acción',
            'subtitle' => 'Un vistazo a cómo capturamos el deporte.',
            // 'poster' => 'images/reel-poster.jpg',  // picsum fallback if omitted
        ],
        'disciplines_title' => 'Deportes que cubrimos',
        'disciplines' => [
            ['name' => 'Fútbol', 'icon' => 'fa-futbol'],
            ['name' => 'Box', 'icon' => 'fa-hand-fist'],
            ['name' => 'Atletismo', 'icon' => 'fa-person-running'],
            ['name' => 'Tenis', 'icon' => 'fa-table-tennis-paddle-ball'],
            ['name' => 'Básquetbol', 'icon' => 'fa-basketball'],
            ['name' => 'Natación', 'icon' => 'fa-person-swimming'],
            ['name' => 'Ciclismo', 'icon' => 'fa-bicycle'],
            ['name' => 'Voleibol', 'icon' => 'fa-volleyball'],
        ],
        'packages_title' => 'Paquetes para atletas',
        'packages' => [
            ['name' => 'Partido', 'price' => '$1,800', 'unit' => '/evento', 'features' => ['Cobertura de 1 partido', '30 fotos editadas', 'Video resumen'], 'cta' => 'Agendar'],
            ['name' => 'Atleta', 'price' => '$3,500', 'unit' => '/sesión', 'features' => ['Sesión personal', '50 fotos editadas', 'Reel para redes', 'Material para patrocinadores'], 'cta' => 'El más elegido', 'featured' => true],
            ['name' => 'Temporada', 'price' => 'A medida', 'features' => ['Cobertura recurrente', 'Highlights por jornada', 'Banco de imágenes'], 'cta' => 'Cotizar'],
        ],
    ],


    /* =========================================================
     | C — CRAMARC Tours
     ========================================================= */
    'c' => [
        'name'    => 'VISORA',
        'url'     => 'https://c.cramarc.com',
        'tagline' => 'Tu propiedad, recorrible desde cualquier lugar',

        'palette' => [
            'accent'      => '#2563EB',
            'accent_deep' => '#1D4FD7',
            'ink'         => '#161412',
            'paper'       => '#FAF8F5',
        ],

        'logo' => 'images/logo-c.png',

        'meta' => [
            'title'       => 'CRAMARC Tours — Recorridos virtuales 360° y dron para bienes raíces',
            'description' => 'Tours virtuales 360° y tomas aéreas con dron para bienes raíces. Tus propiedades recorribles desde cualquier lugar, las 24 horas.',
        ],
        'hero_variant' => 'split',
        'hero' => [
            'eyebrow'  => 'Recorridos virtuales',
            'headline' => 'Tu propiedad, <em>recorrible desde cualquier lugar</em>',
            'lead'     => 'Tours virtuales 360° y tomas aéreas con dron para bienes raíces. Tus compradores recorren la propiedad las 24 horas, antes de pisarla.',
            'cta'      => ['label' => 'Ver lo que hacemos', 'href' => '#empresas'],
            'cta_alt'  => ['label' => 'Contáctanos', 'href' => '#contacto'],
            'embed'       => 'https://kuula.co/share/XXXXX?fs=1&vr=0&autorotate=0.3&logo=0',  // REPLACE
            'embed_title' => 'Recorrido 360 de muestra',
            'embed_badge' => 'Recorrido en vivo',
        ],

        'services' => [
            ['name' => 'Recorridos virtuales 360°', 'tag' => 'Tour 360', 'blurb' => 'El comprador navega cada espacio a su ritmo, desde su casa. Menos visitas perdidas, prospectos más serios.'],
            ['name' => 'Tomas aéreas con dron', 'tag' => 'Dron', 'blurb' => 'Contexto, terreno y entorno desde el aire. Lo que ninguna foto a nivel de piso puede mostrar.'],
            ['name' => 'Fotografía de propiedad', 'tag' => 'Inmobiliaria', 'blurb' => 'Imágenes profesionales que hacen que tu listado destaque en portales y redes.'],
        ],

        'values_title' => 'Cómo trabajamos',
        'values' => [
            ['title' => 'Vende 24/7', 'text' => 'Tu propiedad se muestra sola, a cualquier hora, sin agendar una visita.'],
            ['title' => 'Prospectos más serios', 'text' => 'Quien agenda ya recorrió la propiedad. Llegan informados y decididos.'],
            ['title' => 'Contexto completo', 'text' => 'Interior, exterior y entorno. El comprador entiende la propiedad por completo.'],
        ],

        'cta_band' => [
            'headline' => 'Haz que tus propiedades <em>se recorran solas</em>',
            'lead'     => 'Cuéntanos sobre tu listado y preparamos el recorrido.',
            'button'   => 'Solicita un recorrido',
            'subject'  => 'Contacto — CRAMARC Tours',
        ],
        'contact_lead' => 'Cuéntanos sobre tu propiedad.',
        'contact' => [
            'email'    => 'tours@cramarc.com',
            'phone'    => '+52 229 000 0003',
            'location' => 'Veracruz, México',
        ],
        'tours_title' => 'Explora un recorrido 360°',
        'tours_lead'  => 'Arrastra para mirar en cualquier dirección. Así recorren tus compradores la propiedad, las 24 horas.',
        'tours' => [
            [
                'title'   => 'Casa en Costa de Oro',
                'caption' => 'Residencia · 3 recámaras · recorrido completo',
                'src'     => 'https://kuula.co/share/XXXXX?fs=1&vr=0&autorotate=0.3&thumbs=1&logo=0',  // REPLACE
            ],
            [
                'title'   => 'Departamento en Boca del Río',
                'caption' => 'Depto · vista al mar · recorrido completo',
                'src'     => 'https://kuula.co/share/YYYYY?fs=1&vr=0&autorotate=0.3&thumbs=1&logo=0',  // REPLACE
            ],
        ],
        'whatsapp' => [
            'number'  => '522291234567',                 // 52 + 10-digit MX mobile — REPLACE
            'message' => 'Hola CRAMARC, vengo del sitio y me interesa…',
        ],
        'faq_title' => 'Lo que suelen preguntarnos',
        'faq' => [
            ['q' => '¿En cuánto tiempo entregan?', 'a' => 'Depende del proyecto, pero la mayoría de entregas están listas entre 48 y 72 horas tras la grabación.'],
            ['q' => '¿Trabajan fuera de Veracruz?', 'a' => 'Sí. Cubrimos todo el estado y nos desplazamos a otras ciudades según el proyecto.'],
            ['q' => '¿El equipo de dron está certificado?', 'a' => 'Sí, operamos con piloto certificado y respetamos las zonas de vuelo permitidas.'],
            ['q' => '¿Cómo se cotiza?', 'a' => 'Cuéntanos qué necesitas por WhatsApp o correo y te enviamos una propuesta a la medida.'],
        ],
        /* ===== SHARED: Testimonials (avatars use picsum if no image given) ===== */
        'testimonials_title' => 'Lo que dicen de nosotros',
        'testimonials' => [
            ['quote' => 'El material superó lo que esperábamos. Subió muchísimo el engagement de nuestras redes.', 'name' => 'Laura Méndez', 'role' => 'Marketing, Grupo Norte'],
            ['quote' => 'Profesionales de principio a fin. La calidad se nota en cada toma.', 'name' => 'Carlos Ibáñez', 'role' => 'Atleta profesional'],
            ['quote' => 'Los recorridos 360 nos ayudaron a cerrar ventas sin tantas visitas. Una herramienta enorme.', 'name' => 'Patricia Soto', 'role' => 'Asesora inmobiliaria'],
        ],

        /* ===== SHARED: Equipment (tailor list per brand) ===== */
        'equipment_title' => 'Herramientas de nivel profesional',
        'equipment' => [
            ['name' => 'DJI Mavic 3 Pro', 'spec' => 'Dron · 5.1K', 'icon' => 'fa-helicopter'],
            ['name' => 'Sony A7S III', 'spec' => 'Cámara · 4K 120fps', 'icon' => 'fa-camera'],
            ['name' => 'Insta360 X4', 'spec' => '360° · 8K', 'icon' => 'fa-panorama'],
            ['name' => 'Estabilización', 'spec' => 'Gimbal profesional', 'icon' => 'fa-video'],
        ],

        /* ===== C · TOURS ===== */
        'beforeafter_title' => 'Una foto vs un recorrido',
        'beforeafter_lead' => 'Arrastra para comparar. Lo que tu comprador realmente quiere explorar.',
        'beforeafter' => [
            // 'before' => 'images/listing-flat.jpg', 'after' => 'images/listing-360.jpg',
            'before_label' => 'Foto tradicional',
            'after_label' => 'Recorrido 360°',
        ],
        'process_title' => 'De la propiedad al recorrido',
        'process' => [
            ['title' => 'Agenda', 'text' => 'Coordinamos fecha y acceso a la propiedad.', 'icon' => 'fa-calendar-check'],
            ['title' => 'Capturamos', 'text' => 'Grabamos 360° interior y tomas aéreas con dron.', 'icon' => 'fa-panorama'],
            ['title' => 'Procesamos', 'text' => 'Armamos el recorrido navegable y lo optimizamos.', 'icon' => 'fa-gears'],
            ['title' => 'Recibes', 'text' => 'Te entregamos el link listo para tus portales.', 'icon' => 'fa-link'],
        ],
        'packages_title' => 'Paquetes para inmobiliarias',
        'packages' => [
            ['name' => 'Tour 360', 'price' => '$1,500', 'unit' => '/propiedad', 'features' => ['Recorrido virtual 360°', 'Hospedaje del tour', 'Link para portales'], 'cta' => 'Solicitar'],
            ['name' => 'Tour + Dron', 'price' => '$2,800', 'unit' => '/propiedad', 'features' => ['Todo lo del Tour 360', 'Tomas aéreas con dron', '15 fotos profesionales'], 'cta' => 'El más elegido', 'featured' => true],
            ['name' => 'Desarrollos', 'price' => 'A medida', 'features' => ['Múltiples unidades', 'Recorridos por modelo', 'Material para preventa'], 'cta' => 'Cotizar'],
        ],
    ],

];
