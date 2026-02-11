document.addEventListener("DOMContentLoaded", () => {

    /* ======================================================
       1. CONFIGURACIÓN GLOBAL (PROMO + FECHA)
    ====================================================== */

    const COUNTDOWN_DATE = "2026-03-01T00:00:00-05:00";
    const DISCOUNT_PERCENT = 40;
    const BASE_PRICE = 500;

    const PLANS = {
        basic: BASE_PRICE,
        standard: 800,
        corporate: 1300
    };


    /* ======================================================
       2. REFERENCIAS DOM PRINCIPALES
    ====================================================== */

    const TARGET_TIME = new Date(COUNTDOWN_DATE).getTime();

    const $days = document.getElementById("days");
    const $hours = document.getElementById("hours");
    const $minutes = document.getElementById("minutes");
    const $seconds = document.getElementById("seconds");
    const $countdownDateText = document.getElementById("countdown-date");
    const $discountBadge = document.getElementById("discount-badge");

    let countdownTimer = null;

    const format = v => String(v).padStart(2, "0");


    /* ======================================================
       3. MOTOR DE PRECIOS (CORE BUSINESS LOGIC)
    ====================================================== */

    function getDiscountedPrice(price) {
        return Math.round(price * (1 - DISCOUNT_PERCENT / 100));
    }

    function aplicarPromocionPlanes() {

        document.querySelectorAll(".price-card").forEach(card => {

            const plan = card.dataset.plan;
            if (!PLANS[plan]) return;

            const original = PLANS[plan];
            const final = getDiscountedPrice(original);

            const originalPrice = card.querySelector(".original-price");
            if (originalPrice) originalPrice.textContent = `S/ ${original}`;

            const finalPrice = card.querySelector(".final-price");
            if (finalPrice) finalPrice.textContent = final;

            const badge = card.querySelector(".discount-badge");
            if (badge) badge.textContent = `- ${DISCOUNT_PERCENT}% OFF`;

            const link = card.querySelector("a");
            if (link) {
                const planName = card.querySelector("h3")?.textContent || "Plan";
                link.href = `https://wa.me/51917794918?text=Hola,%20me%20interesa%20el%20${planName}%20de%20S/${final}`;
            }
        });
    }


    /* ======================================================
       4. HERO + HEADERS PROMO
    ====================================================== */

    function actualizarHero() {

        const heroDiscount = document.getElementById("hero-discount-text");
        const heroPrice = document.getElementById("hero-price");
        const heroCTA = document.getElementById("hero-cta");

        const finalBase = getDiscountedPrice(BASE_PRICE);

        if (heroDiscount) heroDiscount.textContent = `PROMOCIÓN ACTIVA – ${DISCOUNT_PERCENT}% OFF`;
        if (heroPrice) heroPrice.textContent = finalBase;

        if (heroCTA) {
            heroCTA.href = `https://wa.me/51917794918?text=Hola,%20quiero%20una%20página%20web%20desde%20S/${finalBase}`;
        }
    }


    function actualizarPromoHeader() {

        const priceEl = document.getElementById("promo-highlight-price");
        const percentEl = document.getElementById("promo-percent");

        const finalBase = getDiscountedPrice(BASE_PRICE);

        if (priceEl) priceEl.textContent = finalBase;
        if (percentEl) percentEl.textContent = DISCOUNT_PERCENT;
    }



    /* ======================================================
       5. COUNTDOWN
    ====================================================== */

    function initCountdownDate() {
        if (!$countdownDateText) return;

        const date = new Date(COUNTDOWN_DATE);
        const formatted = new Intl.DateTimeFormat("es-PE", {
            day: "numeric",
            month: "long",
            year: "numeric"
        }).format(date);

        $countdownDateText.textContent =
            formatted.charAt(0).toUpperCase() + formatted.slice(1);
    }

    function updateCountdown() {

        const diff = TARGET_TIME - Date.now();

        if (diff <= 0) {
            clearInterval(countdownTimer);
            [$days, $hours, $minutes, $seconds].forEach(el => el && (el.textContent = "00"));
            return;
        }

        $days.textContent = format(Math.floor(diff / 86400000));
        $hours.textContent = format(Math.floor(diff / 3600000 % 24));
        $minutes.textContent = format(Math.floor(diff / 60000 % 60));
        $seconds.textContent = format(Math.floor(diff / 1000 % 60));
    }


    /* ======================================================
       6. COMPONENTES UI
    ====================================================== */

    function initFAQ() {
        document.querySelectorAll(".faq-btn").forEach(btn => {
            btn.addEventListener("click", () => {

                document.querySelectorAll(".faq-content").forEach(el => {
                    el.style.maxHeight = "0px";
                    el.style.opacity = "0";
                    el.parentElement.classList.remove("bg-white/5");
                });

                const content = btn.nextElementSibling;
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.opacity = "1";
            });
        });
    }

    function initReveal() {

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: .1 });

        document.querySelectorAll(".reveal").forEach(el => observer.observe(el));
    }

    function initMobileMenu() {

        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        if (!menuBtn || !mobileMenu) return;

        menuBtn.addEventListener("click", () => mobileMenu.classList.toggle("hidden"));
        mobileMenu.querySelectorAll("a").forEach(a =>
            a.addEventListener("click", () => mobileMenu.classList.add("hidden"))
        );
    }


    /* ======================================================
       7. FORMULARIOS
    ====================================================== */

    async function enviarFormulario(form) {

        const responseBox = form.querySelector('.form-response') || document.getElementById('form-response');
        if (!responseBox) return;

        responseBox.classList.add('hidden');

        try {
            const res = await fetch('/enviar_correo.php', {
                method: 'POST',
                body: new FormData(form)
            });

            const data = await res.json();

            responseBox.classList.remove('hidden');
            responseBox.textContent = data.message;
            form.reset();

        } catch {
            responseBox.classList.remove('hidden');
            responseBox.textContent = 'Tenemos problemas técnicos.';
        }
    }


    /* ======================================================
       8. INICIALIZACIÓN GENERAL
    ====================================================== */

    $discountBadge && ($discountBadge.textContent = `¡${DISCOUNT_PERCENT}% DESCUENTO!`);

    initCountdownDate();
    aplicarPromocionPlanes();
    actualizarHero();
    actualizarPromoHeader();
    updateCountdown();

    countdownTimer = setInterval(updateCountdown, 1000);

    initFAQ();
    initReveal();
    initMobileMenu();

    document.getElementById('contactForm')?.addEventListener('submit', e => {
        e.preventDefault();
        enviarFormulario(e.target);
    });

    document.getElementById('demoForm')?.addEventListener('submit', e => {
        e.preventDefault();
        enviarFormulario(e.target);
    });

});
