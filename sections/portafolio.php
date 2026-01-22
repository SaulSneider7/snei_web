<?php
$dataPath = BASE_PATH . '/data/portfolio.json';

if (!file_exists($dataPath)) {
    echo '<p class="text-red-500">Error: portfolio.json no encontrado</p>';
    return;
}

$projects = json_decode(file_get_contents($dataPath), true);

if (!$projects) {
    echo '<p class="text-red-500">Error: JSON inválido</p>';
    return;
}
?>

<section id="portafolio"
    class="relative py-28 bg-gradient-to-b from-[#050505] via-[#0b0f14] to-[#050505] border-y border-white/5">

    <div class="relative max-w-7xl mx-auto px-4">

        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">
                Proyectos reales que generan resultados
            </h2>
            <p class="text-gray-400 text-lg">
                Soluciones digitales creadas para negocios que buscan crecer, vender y posicionarse online.
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php foreach ($projects as $project): ?>
            <article class="group relative bg-gradient-to-b from-white/10 to-white/5 backdrop-blur-xl 
                 border border-white/10 rounded-3xl overflow-hidden
                 transition-all duration-500
                 hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20
                 hover:border-purple-500/40">

                <!-- Imagen -->
                <div class="relative overflow-hidden h-60">
                    <img src="<?= htmlspecialchars($project['image']) ?>"
                        alt="<?= htmlspecialchars($project['title']) ?>"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                    <span
                        class="absolute top-4 left-4 bg-purple-600/90 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-lg">
                        <?= htmlspecialchars($project['badge']) ?>
                    </span>
                </div>

                <!-- Contenido -->
                <div class="relative p-7">
                    <h3 class="text-xl font-semibold text-white mb-3">
                        <?= htmlspecialchars($project['title']) ?>
                    </h3>

                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        <?= htmlspecialchars($project['description']) ?>
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6 text-xs">
                        <?php foreach ($project['tags'] as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag) ?></span>
                        <?php endforeach; ?>
                    </div>

                    <?php if ($project['link']): ?>
                    <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank"
                        class="inline-flex items-center gap-2 text-purple-400 font-semibold hover:text-purple-300">
                        Ver proyecto <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <?php else: ?>
                    <span class="text-gray-500 text-sm">Proyecto privado</span>
                    <?php endif; ?>
                </div>
            </article>
            <?php endforeach; ?>

        </div>
    </div>
</section>