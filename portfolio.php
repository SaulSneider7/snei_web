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
    <nav class="fixed top-0 left-0 w-full z-50 bg-[#050505]/80 backdrop-blur-md border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

            <!-- Logo -->
            <a href="./" class="flex items-center gap-2 text-2xl font-bold tracking-tight hover:opacity-90 transition">
                <i class="fa-solid fa-code text-purple-500"></i>
                <span>Tu sitio<span class="text-purple-500">Web</span></span>
            </a>

            <!-- Actions -->
            <div class="flex items-center gap-4">
                <a href="./"
                    class="text-sm font-medium text-gray-300 hover:text-purple-400 transition flex items-center gap-2">
                    <i class="fa-solid fa-circle-arrow-left"></i> Volver al inicio
                </a>

                <a href="./#demo"
                    class="hidden sm:inline-flex text-sm font-semibold bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition shadow-lg shadow-purple-600/30">
                    Demo GRATIS
                </a>
            </div>

        </div>
    </nav>


    <main class="pt-16">

        <!-- Hero Portfolio -->
        <?php require_once BASE_PATH . '/sections/hero_portfolio.php'; ?>

        <!-- Portfolio Section -->
        <?php require_once BASE_PATH . '/sections/portafolio.php'; ?>

        <!-- Better Offer Section -->
        <?php require_once BASE_PATH . '/sections/mejor_oferta.php'; ?>

    </main>

<!-- Footer -->
<footer class="bg-[#020202] border-t border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-10 grid grid-rows-[auto_1fr_auto] gap-6">

    <!-- Top -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-start">

      <!-- Brand -->
      <div class="md:col-span-2">
        <div class="flex items-center gap-2 text-xl font-bold mb-2">
          <i class="fa-solid fa-code text-purple-500"></i>
          <span>Tu sitio<span class="text-purple-500">Web</span></span>
        </div>

        <p class="text-gray-500 text-sm leading-relaxed max-w-md">
          Proyectos web desarrollados para negocios reales.
          Diseño limpio, buen rendimiento y enfoque comercial.
        </p>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="text-white font-semibold mb-3 text-sm">Contacto</h4>
        <ul class="space-y-2 text-sm text-gray-400">
          <li class="flex items-center gap-3">
            <i class="fa-solid fa-phone text-purple-500 text-xs"></i>
            <span>+51 917 794 918</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fa-solid fa-envelope text-purple-500 text-xs"></i>
            <span>contacto@tu-sitioweb.com</span>
          </li>
        </ul>
      </div>

    </div>

    <!-- CENTER CTA (REAL CENTER) -->
    <div class="flex items-center justify-center">
      <a
        href="https://wa.me/51917794918?text=Hola,%20vi%20su%20portafolio%20y%20quiero%20crear%20un%20proyecto%20web."
        target="_blank"
        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl
               bg-purple-600/10 text-purple-400 text-sm font-semibold
               hover:bg-purple-600 hover:text-white
               transition shadow-md hover:shadow-purple-500/30"
      >
        <i class="fa-brands fa-whatsapp"></i>
        Empecemos tu proyecto
      </a>
    </div>

    <!-- Bottom -->
    <div class="border-t border-white/5 pt-4 flex flex-col md:flex-row items-center justify-between gap-3">
      <p class="text-gray-600 text-xs">
        © 2025 Tu Sitio Web. Todos los derechos reservados.
      </p>

      <a href="./" class="text-xs text-gray-500 hover:text-purple-400 transition">
        Volver al inicio
      </a>
    </div>

  </div>
</footer>







    <!-- WhatsApp Floating Button -->
    <?php require_once BASE_PATH . '/partials/whatsapp_button.php'; ?>

    <!-- Configuracion de tailwind -->
    <script src="assets/js/config_tailwind.js"></script>

    <!-- Application Logic -->
    <script src="./assets/js/script.js"></script>
</body>

</html>