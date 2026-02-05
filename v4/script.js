const menuToggle = document.querySelector('.menu-toggle');
const mobileNav = document.querySelector('.mobile-nav');
const navLinks = document.querySelectorAll('.main-nav a, .mobile-nav a');
const revealItems = document.querySelectorAll('[data-reveal]');
const sections = Array.from(document.querySelectorAll('main section[id]'));

if (menuToggle && mobileNav) {
  menuToggle.addEventListener('click', () => {
    const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!expanded));
    menuToggle.classList.toggle('is-open', !expanded);
    mobileNav.setAttribute('aria-hidden', String(expanded));
  });
}

navLinks.forEach((link) => {
  link.addEventListener('click', () => {
    if (menuToggle && mobileNav) {
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.classList.remove('is-open');
      mobileNav.setAttribute('aria-hidden', 'true');
    }
  });
});

const revealObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.16 }
);

revealItems.forEach((item) => revealObserver.observe(item));

const setActiveLink = () => {
  const scrollPosition = window.scrollY + 180;
  let currentId = '';

  sections.forEach((section) => {
    if (scrollPosition >= section.offsetTop) {
      currentId = section.getAttribute('id') || '';
    }
  });

  navLinks.forEach((anchor) => {
    const target = anchor.getAttribute('href')?.replace('#', '') || '';
    anchor.classList.toggle('is-active', currentId === target);
  });
};

setActiveLink();
window.addEventListener('scroll', setActiveLink, { passive: true });
window.addEventListener('resize', setActiveLink);
