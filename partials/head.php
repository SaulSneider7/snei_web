<?php
$title = 'Diseño Web Profesional en Perú | Tu Sitio Web';
$description = 'Agencia de diseño web en Lima. Páginas web desde S/250.';
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23a855f7' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='2' y='2' width='20' height='20' rx='5' fill='%23050505' stroke='none'/%3E%3Cpolyline points='16 18 22 12 16 6' /%3E%3Cpolyline points='8 6 2 12 8 18' /%3E%3C/svg%3E">

    <!-- SEO Optimization -->
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">

    <meta name="author" content="Tu Sitio Web" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tu-sitioweb.com/" />
    <meta property="og:title" content="Diseño de Páginas Web Profesionales desde S/250 | Tu Sitio Web" />
    <meta property="og:description"
        content="Transforma tu negocio con una web profesional. Oferta 50% de descuento y hosting gratis el primer año." />
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=2426&ixlib=rb-4.0.3" />

    <!-- Tailwind CSS -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet" />

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <!-- tailwindcss -->
    <link rel="stylesheet" href="./assets/css/output.css">
    <!-- My styles -->
    <link rel="stylesheet" href="./assets/css/my_styles.css" />
</head>