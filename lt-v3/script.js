const navToggle = document.querySelector(".nav__toggle");
const navDrawer = document.querySelector(".nav__drawer");
const navLinks = document.querySelectorAll(".nav__links a, .nav__drawer a");
const revealItems = document.querySelectorAll("[data-reveal]");

if (navToggle && navDrawer) {
  navToggle.addEventListener("click", () => {
    const isHidden = navDrawer.getAttribute("aria-hidden") === "true";
    navDrawer.setAttribute("aria-hidden", isHidden ? "false" : "true");
    navToggle.classList.toggle("is-open", isHidden);
  });
}

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    navDrawer.setAttribute("aria-hidden", "true");
    navToggle.classList.remove("is-open");
  });
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
      }
    });
  },
  { threshold: 0.2 }
);

revealItems.forEach((item) => observer.observe(item));

const sections = Array.from(document.querySelectorAll("main section[id]"));
const navAnchors = Array.from(document.querySelectorAll(".nav__links a"));

const setActiveLink = () => {
  const scrollPosition = window.scrollY + 140;
  let currentId = "";

  sections.forEach((section) => {
    if (scrollPosition >= section.offsetTop) {
      currentId = section.getAttribute("id");
    }
  });

  navAnchors.forEach((anchor) => {
    const targetId = anchor.getAttribute("href").replace("#", "");
    anchor.classList.toggle("is-active", targetId === currentId);
  });
};

setActiveLink();
window.addEventListener("scroll", setActiveLink);
