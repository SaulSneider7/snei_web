<!-- Navbar -->
<nav id="navbar" class="fixed w-full z-50 top-0 left-0 bg-[#050505]/80 backdrop-blur-md border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">

        <!-- Logo -->
        <div class="text-2xl font-bold tracking-tight flex items-center gap-2 cursor-pointer"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <i class="fa-solid fa-code text-purple-500"></i>
            <span>Tu sitio<span class="text-purple-500">Web</span></span>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex items-center gap-8 text-sm font-medium">
            <li onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"><a href="#inicio" class="hover:text-purple-400 transition">Inicio</a></li>
            <li><a href="#promo" class="hover:text-purple-400 transition">Servicios</a></li>
            <li><a href="#mejor-oferta" class="hover:text-purple-400 transition">Mejoramos tu propuesta</a></li>
            <li><a href="#demo" class="hover:text-purple-400 transition">Demo Gratis</a></li>
            <li><a href="./portfolio.php" class="hover:text-purple-400 transition">Portafolio</a></li>
            <li><a href="#contacto" class="hover:text-purple-400 transition">Contacto</a></li>
        </ul>

        <!-- CTA Desktop -->
        <a href="#demo"
            class="hidden md:flex text-sm font-medium bg-purple-600/20 hover:bg-purple-600/40 text-purple-300 px-4 py-2 rounded-full border border-purple-500/30 transition">
            Demo GRATIS
        </a>

        <!-- Hamburger -->
        <button id="menu-btn" class="md:hidden text-xl text-white focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-[#050505] border-t border-white/5">
        <ul class="flex flex-col px-6 py-6 gap-4 text-sm font-medium">
            <li onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"><a href="#inicio" class="block hover:text-purple-400">Inicio</a></li>
            <li><a href="#promo" class="block hover:text-purple-400">Servicios</a></li>
            <li><a href="#mejor-oferta" class="block hover:text-purple-400">Mejoramos tu propuesta</a></li>
            <li><a href="#demo" class="hover:text-purple-400 transition">Demo Gratis</a></li>
            <li><a href="./portfolio.php" class="hover:text-purple-400 transition">Portafolio</a></li>
            <li><a href="#contacto" class="block hover:text-purple-400">Contacto</a></li>

            <a href="#demo"
                class="mt-4 text-center bg-purple-600/30 hover:bg-purple-600/50 text-purple-300 px-4 py-2 rounded-full border border-purple-500/30 transition">
                Demo GRATIS
            </a>
        </ul>
    </div>
</nav>