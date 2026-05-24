function updateParallax() {
  const els = document.querySelectorAll("[data-parallax-speed]");
  if (!els.length) return;

  const scrollY = window.scrollY;

  els.forEach((el) => {
    const speed = parseFloat(el.getAttribute("data-parallax-speed")) || 0.3;
    const rect = el.getBoundingClientRect();
    const offset = rect.top + scrollY;
    const diff = scrollY - offset;
    el.style.transform = `translate3d(0, ${diff * speed}px, 0)`;
  });
}

let ticking = false;

window.addEventListener("scroll", () => {
  if (!ticking) {
    window.requestAnimationFrame(() => {
      updateParallax();
      ticking = false;
    });
    ticking = true;
  }
});

document.addEventListener("DOMContentLoaded", updateParallax);
