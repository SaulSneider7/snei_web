document.addEventListener("DOMContentLoaded", () => {

  /* ===============================
     1. COUNTDOWN CONFIG
  ================================ */
  const COUNTDOWN_DATE = "2026-01-30T00:00:00-05:00";
  const TARGET_TIME = new Date(COUNTDOWN_DATE).getTime();

  const $days = document.getElementById("days");
  const $hours = document.getElementById("hours");
  const $minutes = document.getElementById("minutes");
  const $seconds = document.getElementById("seconds");
  const $countdownDateText = document.getElementById("countdown-date");

  const format = (value) => String(value).padStart(2, "0");
  let countdownTimer = null;

  if ($countdownDateText) {
    const date = new Date(COUNTDOWN_DATE);
    const formatter = new Intl.DateTimeFormat("es-PE", {
      day: "numeric",
      month: "long",
      year: "numeric",
    });

    const formattedDate = formatter.format(date);
    $countdownDateText.textContent =
      formattedDate.charAt(0).toUpperCase() + formattedDate.slice(1);
  }

  function updateCountdown() {
    if (!$days || !$hours || !$minutes || !$seconds) return;

    const diff = TARGET_TIME - Date.now();

    if (diff <= 0) {
      clearInterval(countdownTimer);
      [$days, $hours, $minutes, $seconds].forEach(el => el.textContent = "00");
      return;
    }

    $days.textContent = format(Math.floor(diff / 86400000));
    $hours.textContent = format(Math.floor((diff / 3600000) % 24));
    $minutes.textContent = format(Math.floor((diff / 60000) % 60));
    $seconds.textContent = format(Math.floor((diff / 1000) % 60));
  }

  updateCountdown();
  countdownTimer = setInterval(updateCountdown, 1000);


  /* ===============================
     2. FAQ ACCORDION (FontAwesome)
  ================================ */
  document.querySelectorAll(".faq-btn").forEach((button) => {
    button.addEventListener("click", () => {
      const content = button.nextElementSibling;
      const parent = button.parentElement;
      const icon = button.querySelector("i");

      const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

      document.querySelectorAll(".faq-content").forEach((el) => {
        el.style.maxHeight = "0px";
        el.style.opacity = "0";
        el.parentElement.classList.remove("bg-white/5");

        const i = el.parentElement.querySelector("i");
        if (i) {
          i.classList.remove("fa-minus");
          i.classList.add("fa-plus", "text-gray-400");
        }
      });

      if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + "px";
        content.style.opacity = "1";
        parent.classList.add("bg-white/5");

        if (icon) {
          icon.classList.remove("fa-plus", "text-gray-400");
          icon.classList.add("fa-minus", "text-purple-400");
        }
      }
    });
  });


  /* ===============================
     3. SCROLL ANIMATIONS
  ================================ */
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1, rootMargin: "0px 0px -50px 0px" }
  );

  document.querySelectorAll(".reveal").forEach(el => observer.observe(el));


  /* ===============================
     4. MOBILE MENU
  ================================ */
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  if (menuBtn && mobileMenu) {
    const mobileLinks = mobileMenu.querySelectorAll("a");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    mobileLinks.forEach(link => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
      });
    });
  }

  /* ===============================
   ENVÍO DE FORMULARIOS (CONTACTO / DEMO)
  ================================ */

  async function enviarFormulario(form) {
    const responseBox =
      form.querySelector('.form-response') ||
      document.getElementById('form-response');

    if (!responseBox) {
      console.error('No se encontró el contenedor de respuesta');
      return;
    }

    responseBox.classList.add('hidden');
    responseBox.textContent = '';

    const formData = new FormData(form);

    try {
      const res = await fetch('/enviar_correo.php', {
        method: 'POST',
        body: formData
      });

      // Si el servidor no responde JSON válido, esto fallará
      const data = await res.json();

      responseBox.classList.remove('hidden');

      if (data.success) {
        responseBox.className =
          'form-response mb-4 text-sm text-green-400 bg-green-400/10 p-3 rounded-lg text-center';
        responseBox.textContent = data.message;
        form.reset();
      } else {
        responseBox.className =
          'form-response mb-4 text-sm text-red-400 bg-red-400/10 p-3 rounded-lg text-center';
        responseBox.textContent = data.message;
      }

    } catch (error) {
      console.error('Error al enviar formulario:', error);

      responseBox.classList.remove('hidden');
      responseBox.className =
        'form-response mb-4 text-sm text-red-400 bg-red-400/10 p-3 rounded-lg text-center';
      responseBox.textContent =
        'Tenemos problemas técnicos en este momento. Inténtalo más tarde.';
    }
  }

  /* ===============================
     EVENTOS
  ================================ */


    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
      contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        enviarFormulario(contactForm);
      });
    }

    const demoForm = document.getElementById('demoForm');
    if (demoForm) {
      demoForm.addEventListener('submit', (e) => {
        e.preventDefault();
        enviarFormulario(demoForm);
      });
    }


});


