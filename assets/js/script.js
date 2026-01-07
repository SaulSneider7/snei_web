/* ===============================
   1. ICONS
================================ */
lucide.createIcons();

/* ===============================
   2. COUNTDOWN CONFIG
================================ */
const COUNTDOWN_DATE = "2026-01-30T00:00:00-05:00"; // YYYY-MM-DDTHH:mm:ss
const TARGET_TIME = new Date(COUNTDOWN_DATE).getTime();

const $days = document.getElementById("days");
const $hours = document.getElementById("hours");
const $minutes = document.getElementById("minutes");
const $seconds = document.getElementById("seconds");

const format = (value) => String(value).padStart(2, "0");

let countdownTimer = null;


const $countdownDateText = document.getElementById("countdown-date");

function renderCountdownDate() {
  const date = new Date(COUNTDOWN_DATE);

  const formatter = new Intl.DateTimeFormat("es-PE", {
    day: "numeric",
    month: "long",
    year: "numeric",
  });

  // Ejemplo: "1 de enero de 2026"
  const formattedDate = formatter.format(date);

  // Capitalizar mes (mejor presentación)
  $countdownDateText.textContent =
    formattedDate.charAt(0).toUpperCase() + formattedDate.slice(1);
}

renderCountdownDate();


function updateCountdown() {
  const now = Date.now();
  const diff = TARGET_TIME - now;

  if (diff <= 0) {
    stopCountdown();
    setZero();
    onCountdownFinish();
    return;
  }

  const days = Math.floor(diff / 86400000);
  const hours = Math.floor((diff / 3600000) % 24);
  const minutes = Math.floor((diff / 60000) % 60);
  const seconds = Math.floor((diff / 1000) % 60);

  $days.textContent = format(days);
  $hours.textContent = format(hours);
  $minutes.textContent = format(minutes);
  $seconds.textContent = format(seconds);
}

function startCountdown() {
  updateCountdown();
  countdownTimer = setInterval(updateCountdown, 1000);
}

function stopCountdown() {
  if (countdownTimer) clearInterval(countdownTimer);
}

function setZero() {
  [$days, $hours, $minutes, $seconds].forEach(
    (el) => (el.textContent = "00")
  );
}

function onCountdownFinish() {
  console.log("⏰ Countdown finalizado");
  // Aquí puedes:
  // - Mostrar mensaje
  // - Activar CTA
  // - Cambiar texto
  // - Lanzar animación
}

startCountdown();

/* ===============================
   3. FAQ ACCORDION
================================ */
document.querySelectorAll(".faq-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;
    const parent = button.parentElement;
    const icon = button.querySelector(".icon-plus");

    const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

    document.querySelectorAll(".faq-content").forEach((el) => {
      el.style.maxHeight = "0px";
      el.style.opacity = "0";
      el.parentElement.classList.remove("bg-white/5");
      el.parentElement.classList.add("bg-transparent");

      const i = el.parentElement.querySelector(".icon-plus");
      if (i) {
        i.setAttribute("data-lucide", "plus");
        i.classList.remove("text-purple-400");
        i.classList.add("text-gray-400");
      }
    });

    if (!isOpen) {
      content.style.maxHeight = content.scrollHeight + "px";
      content.style.opacity = "1";
      parent.classList.add("bg-white/5");
      parent.classList.remove("bg-transparent");

      if (icon) {
        icon.setAttribute("data-lucide", "minus");
        icon.classList.add("text-purple-400");
        icon.classList.remove("text-gray-400");
      }
    }

    lucide.createIcons();
  });
});

/* ===============================
   4. SCROLL ANIMATIONS
================================ */
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        observer.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }
);

document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));
