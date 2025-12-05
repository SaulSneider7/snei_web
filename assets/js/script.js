// 1. Initialize Icons
lucide.createIcons();

// 2. Countdown Logic
const TARGET_DATE = new Date("2026-01-01T00:00:00").getTime();

function updateCountdown() {
  const now = new Date().getTime();
  const difference = TARGET_DATE - now;

  if (difference > 0) {
    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((difference / 1000 / 60) % 60);
    const seconds = Math.floor((difference / 1000) % 60);

    document.getElementById("days").innerText = days < 10 ? "0" + days : days;
    document.getElementById("hours").innerText =
      hours < 10 ? "0" + hours : hours;
    document.getElementById("minutes").innerText =
      minutes < 10 ? "0" + minutes : minutes;
    document.getElementById("seconds").innerText =
      seconds < 10 ? "0" + seconds : seconds;
  }
}
setInterval(updateCountdown, 1000);
updateCountdown();

// 3. FAQ Logic (Accordion)
document.querySelectorAll(".faq-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;
    const parent = button.parentElement;
    const icon = button.querySelector(".icon-plus");

    // Toggle active state
    if (content.style.maxHeight && content.style.maxHeight !== "0px") {
      content.style.maxHeight = "0px";
      content.style.opacity = "0";
      parent.classList.remove("bg-white/5");
      parent.classList.add("bg-transparent");
      if (icon) {
        icon.setAttribute("data-lucide", "plus");
        icon.classList.remove("text-purple-400");
        icon.classList.add("text-gray-400");
      }
    } else {
      // Close others (Optional, usually better UX)
      document.querySelectorAll(".faq-content").forEach((el) => {
        el.style.maxHeight = "0px";
        el.style.opacity = "0";
        el.parentElement.classList.remove("bg-white/5");
        el.parentElement.classList.add("bg-transparent");
        const otherIcon = el.parentElement.querySelector(".icon-plus");
        if (otherIcon) {
          otherIcon.setAttribute("data-lucide", "plus");
          otherIcon.classList.remove("text-purple-400");
          otherIcon.classList.add("text-gray-400");
        }
      });

      content.style.maxHeight = content.scrollHeight + "px";
      content.style.opacity = "1";
      parent.classList.remove("bg-transparent");
      parent.classList.add("bg-white/5");
      if (icon) {
        // We just keep the plus but maybe rotate it or change color
        icon.classList.remove("text-gray-400");
        icon.classList.add("text-purple-400");
        icon.setAttribute("data-lucide", "minus");
      }
    }
    lucide.createIcons(); // Re-render icons after DOM change
  });
});

// 4. Scroll Animation (Intersection Observer)
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
      observer.unobserve(entry.target); // Only animate once
    }
  });
}, observerOptions);

document.querySelectorAll(".reveal").forEach((el) => {
  observer.observe(el);
});
