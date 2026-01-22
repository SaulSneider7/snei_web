<!-- Contact Form Section -->
<section id="contacto" class="py-24 bg-gradient-to-b from-black to-[#0a0a0a] border-y border-white/5">
    <div class="max-w-4xl mx-auto px-4 text-center reveal">

        <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">
            Convirtamos tu idea en una web real
        </h2>

        <p class="text-gray-400 max-w-2xl mx-auto mb-12">
            Cuéntanos brevemente tu proyecto. Te responderemos en menos de 24 horas con una propuesta clara.
        </p>

        <form class="glass-panel p-8 rounded-2xl max-w-2xl mx-auto text-left" action="/procesar-contacto.php"
            method="post" autocomplete="on">

            <!-- Honeypot anti-spam -->
            <input type="text" name="empresa" tabindex="-1" autocomplete="off" class="hidden">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Nombre completo
                    </label>
                    <input type="text" name="nombre" required autocomplete="name" placeholder="Ej. Juan Pérez"
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Correo electrónico
                    </label>
                    <input type="email" name="email" required autocomplete="email" placeholder="correo@ejemplo.com"
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>

            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-300 mb-2">
                    Teléfono / WhatsApp
                </label>
                <input type="tel" name="telefono" autocomplete="tel" placeholder="+51 999 999 999"
                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-300 mb-2">
                    ¿Qué necesitas?
                </label>
                <textarea name="mensaje" rows="5" required
                    placeholder="Ej. Página web corporativa, tienda online, mejora de diseño, mantenimiento..."
                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition-all shadow-lg shadow-purple-600/30 hover:shadow-purple-600/50">
                Solicitar contacto
            </button>

            <p class="text-xs text-gray-500 text-center mt-4">
                No compartimos tu información. Respuesta en menos de 24 horas.
            </p>

        </form>

    </div>
</section>