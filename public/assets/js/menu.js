// navbar.js
(function () {
  const menuBtn    = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const iconOpen   = document.getElementById("icon-open");
  const iconClose  = document.getElementById("icon-close");

  let isOpen = false;

  // ── Toggle mobile menu ──────────────────────────────────────────
  function openMenu() {
    isOpen = true;
    mobileMenu.classList.remove("max-h-0", "opacity-0");
    mobileMenu.classList.add("max-h-96", "opacity-100");
    iconOpen.classList.add("hidden");
    iconClose.classList.remove("hidden");
    menuBtn.setAttribute("aria-expanded", "true");
  }

  function closeMenu() {
    isOpen = false;
    mobileMenu.classList.add("max-h-0", "opacity-0");
    mobileMenu.classList.remove("max-h-96", "opacity-100");
    iconOpen.classList.remove("hidden");
    iconClose.classList.add("hidden");
    menuBtn.setAttribute("aria-expanded", "false");
  }

  menuBtn.addEventListener("click", () => (isOpen ? closeMenu() : openMenu()));

  // ── Close on nav link click ─────────────────────────────────────
  mobileMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });
})();