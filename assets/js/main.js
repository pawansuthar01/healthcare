document.addEventListener('DOMContentLoaded', () => {
  const header   = document.getElementById('site-header');
  const hamburger= document.getElementById('hamburger');
  const sidebar  = document.getElementById('sidebar');
  const overlay  = document.getElementById('sidebar-overlay');
  const closeBtn = document.getElementById('sidebar-close');

  // ── Header scroll shrink ──────────────────────────────
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 60);
  }, { passive: true });

  // ── Sidebar open/close ────────────────────────────────
  function openSidebar() {
    sidebar.classList.add('open');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.classList.add('active');
  }
  function closeSidebar() {
    sidebar.classList.remove('open');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.classList.remove('active');
  }

  if (hamburger) hamburger.addEventListener('click', openSidebar);
  if (closeBtn)  closeBtn.addEventListener('click', closeSidebar);
  if (overlay)   overlay.addEventListener('click', closeSidebar);

  // Close sidebar on ESC key
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeSidebar();
  });

  // ── Scroll reveal ─────────────────────────────────────
  const ro = new IntersectionObserver(
    entries => entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); }),
    { threshold: 0.1 }
  );
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

  // ── Animated counters ─────────────────────────────────
  document.querySelectorAll('.stat-num[data-target]').forEach(el => {
    const target = +el.dataset.target;
    const suffix = el.dataset.suffix || '';
    const cr = new IntersectionObserver(([e]) => {
      if (!e.isIntersecting) return;
      let current = 0;
      const step = target / 60;
      const tick = () => {
        current = Math.min(current + step, target);
        el.textContent = Math.round(current) + suffix;
        if (current < target) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
      cr.unobserve(el);
    }, { threshold: 0.5 });
    cr.observe(el);
  });
});
