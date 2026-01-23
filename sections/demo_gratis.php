<section id="demo"
    class="relative py-24 bg-gradient-to-b from-[#0b0f14] via-[#0e0a18] to-[#050505] border-y border-white/5">

    <!-- Glow -->
    <div
        class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(168,85,247,0.15),transparent_60%)] pointer-events-none">
    </div>

    <div class="relative max-w-5xl mx-auto px-4 text-center reveal">

        <!-- Badge -->
        <div
            class="inline-flex items-center gap-2 bg-purple-500/10 text-purple-400 px-5 py-2 rounded-full mb-6 border border-purple-500/20">
            <i class="fa-solid fa-bolt"></i>
            <span class="font-semibold text-sm tracking-wide">DEMO GRATIS</span>
        </div>

        <!-- Title -->
        <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">
            Prueba tu página web GRATIS
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-fuchsia-500">
                antes de invertir
            </span>
        </h2>

        <!-- Description -->
        <p class="text-gray-400 max-w-2xl mx-auto mb-12 leading-relaxed">
            Describe brevemente el tipo de página que necesitas y te enviaremos una
            <strong class="text-white">demo visual personalizada</strong>.
            Puedes solicitarla por formulario o directamente por WhatsApp.
        </p>

        <!-- Form -->
        <form id="demoForm" class="glass-panel p-8 rounded-2xl max-w-2xl mx-auto text-left">

            <input type="hidden" name="tipo" value="demo">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        WhatsApp
                    </label>
                    <input type="tel" name="telefono" placeholder="Ej: 917794918"
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Correo electrónico
                    </label>
                    <input type="email" name="email" placeholder="correo@ejemplo.com"
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white">
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-300 mb-2">
                    Describe tu idea
                </label>
                <textarea name="mensaje" rows="4" required
                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white"
                    placeholder="Ej. Quiero una pagina web para una academia deportiva"></textarea>
            </div>

            <!-- MENSAJE DE RESPUESTA -->
            <div id="demo-response" class="form-response hidden mb-4 text-sm font-medium text-center rounded-lg p-3">
            </div>

            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white py-4 rounded-xl transition">
                Solicitar demo gratis
            </button>

        </form>


        <!-- Divider -->
        <div class="flex items-center gap-4 my-10 text-gray-500">
            <span class="flex-1 h-px bg-white/10"></span>
            <span class="text-sm">o</span>
            <span class="flex-1 h-px bg-white/10"></span>
        </div>

        <!-- WhatsApp CTA -->
        <a href="https://wa.me/51917794918?text=Hola,%20quiero%20una%20demo%20gratis%20de%20una%20página%20web."
            target="_blank"
            class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-black font-bold px-8 py-4 rounded-xl transition-all shadow-lg shadow-green-500/30 hover:-translate-y-1">
            <i class="fa-brands fa-whatsapp text-xl"></i>
            Solicitar demo por WhatsApp
        </a>

    </div>
</section>