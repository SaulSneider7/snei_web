<?php
$title = 'Diseño Web Profesional en Perú | Tu Sitio Web';
$description = 'Agencia de diseño web en Lima. Páginas web desde S/250.';

define('BASE_PATH', __DIR__);
?>

<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<?php require_once BASE_PATH . '/partials/head.php'; ?>

<body>
    <!-- Navbar -->
    <?php require_once BASE_PATH . '/partials/navbar.php'; ?>

    <main class="pt-16">
        <!-- Countdown Section -->
        <?php require_once BASE_PATH . '/partials/countdown.php'; ?>

        <!-- Hero Section -->
        <?php require_once BASE_PATH . '/sections/hero.php'; ?>


        <!-- Problem / Solution Section -->
        <?php require_once BASE_PATH . '/sections/problem_solution.php'; ?>

        <!-- PRICING SECTION (New Structure) -->
        <?php require_once BASE_PATH . '/sections/pricing.php'; ?>

        <!-- Custom Solutions & Support Section -->
        <?php require_once BASE_PATH . '/sections/desarrollo_avanzado.php'; ?>

        <!-- Better Offer Section -->
        <?php require_once BASE_PATH . '/sections/mejor_oferta.php'; ?>

        <!-- Demo Section -->
        <?php require_once BASE_PATH . '/sections/demo_gratis.php'; ?>

        <!-- Contact Form Section -->
        <?php require_once BASE_PATH . '/sections/contacto.php'; ?>


        <!-- FAQ Section -->
        <?php require_once BASE_PATH . '/sections/faq.php'; ?>
    </main>

    <!-- Footer Improved -->
    <?php require_once BASE_PATH . '/partials/footer.php'; ?>

    <!-- WhatsApp Floating Button -->
    <?php require_once BASE_PATH . '/partials/whatsapp_button.php'; ?>

    <!-- Configuracion de tailwind -->
    <script src="./assets/js/config_tailwind.js"></script>

    <!-- Application Logic -->
    <script  src="./assets/js/script.js"></script>
</body>

</html>