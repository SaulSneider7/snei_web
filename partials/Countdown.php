<!-- Countdown Section -->
<div
    class="w-full bg-gradient-to-r from-purple-900 to-indigo-900 border-y border-white/10 py-4 relative overflow-hidden">
    <div
        class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20">
    </div>
    <div
        class="max-w-6xl mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center justify-center gap-6 text-center md:text-left">
        <div class="flex items-center gap-3 justify-center">
            <div id="discount-badge" class="bg-yellow-500 text-black font-bold px-3 py-1 rounded text-sm animate-pulse">
                ¡0% DESCUENTO!
            </div>

            <div>
                <h3 class="text-white font-bold uppercase tracking-wider text-sm md:text-base">
                    Oferta Limitada 2025
                </h3>
                <p class="text-gray-300 text-xs">
                    Precios de locura por tiempo limitado
                </p>
            </div>
        </div>

        <div class="flex gap-4 text-white justify-center" id="countdown-timer">
            <!-- JS will fill this -->
            <div class="flex flex-col items-center">
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-3 min-w-[60px] border border-white/10 shadow-lg">
                    <span id="days" class="text-2xl font-display font-bold">00</span>
                </div>
                <span class="text-[10px] uppercase tracking-widest mt-1 text-gray-400">Días</span>
            </div>
            <span class="text-2xl font-bold self-start mt-2">:</span>
            <div class="flex flex-col items-center">
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-3 min-w-[60px] border border-white/10 shadow-lg">
                    <span id="hours" class="text-2xl font-display font-bold">00</span>
                </div>
                <span class="text-[10px] uppercase tracking-widest mt-1 text-gray-400">Hrs</span>
            </div>
            <span class="text-2xl font-bold self-start mt-2">:</span>
            <div class="flex flex-col items-center">
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-3 min-w-[60px] border border-white/10 shadow-lg">
                    <span id="minutes" class="text-2xl font-display font-bold">00</span>
                </div>
                <span class="text-[10px] uppercase tracking-widest mt-1 text-gray-400">Min</span>
            </div>
            <span class="text-2xl font-bold self-start mt-2">:</span>
            <div class="flex flex-col items-center">
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-3 min-w-[60px] border border-white/10 shadow-lg">
                    <span id="seconds" class="text-2xl font-display font-bold">00</span>
                </div>
                <span class="text-[10px] uppercase tracking-widest mt-1 text-gray-400">Seg</span>
            </div>
        </div>

        <div class="hidden md:block h-8 w-[1px] bg-white/20"></div>

        <div class="text-sm font-medium text-purple-200">
            Termina el <br />
            <span id="countdown-date" class="text-white font-bold"></span>
        </div>
    </div>
</div>