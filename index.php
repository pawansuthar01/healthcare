<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Committed for Good Health';
$page_desc  = 'Torcy Healthcare — Premium nutraceuticals for your entire family. Best Protein, VitBest & CalShot-D3.';
require_once __DIR__ . '/includes/header.php';
$products = get_products();
?>

<!-- ════ HERO ════ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-blob"></div>
  <div class="container">
    <div class="hero-content">
      <span class="eyebrow">🇮🇳 indian Nutraceuticals</span>
      <h1>
        Nutrition That<br>
        <em>Actually Works.</em>
      </h1>
      <p class="lead" style="color:rgba(255,255,255,.78);max-width:560px">
        Premium, evidence-backed dietary supplements formulated for optimal bioavailability — designed for every member of your family.
      </p>
      <div class="hero-badges">
        <span class="hero-badge">Sugar Free Options</span>
        <span class="hero-badge">GMP Certified</span>
        <span class="hero-badge">100% Dietary Supplement</span>
      </div>
      <div class="hero-actions">
        <a href="/products.php" class="btn btn-white">Explore Products</a>
        <a href="/contact.php" class="btn btn-ghost">Get in Touch</a>
      </div>
    </div>
  </div>
  <div class="hero-scroll">
    <span>Scroll</span>
    <div class="scroll-dot"></div>
  </div>
</section>

<!-- ════ PRODUCTS PREVIEW ════ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:3.5rem">
      <span class="eyebrow">Our Formulations</span>
      <h2>Premium Supplements,<br>Proven Results</h2>
      <p class="lead mx-auto" style="margin-top:1rem">Three targeted formulas covering protein, vitamins and vitamin D3 — everything your family needs.</p>
    </div>

    <div class="products-grid">
      <?php foreach($products as $i => $p): ?>
      <div class="product-card reveal delay-<?= $i+1 ?>">
        <div class="product-card__img" style="background:<?= $p['bg'] ?>">
          <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>">
          <span class="product-card__badge" style="background:<?= $p['color'] ?>;color:#fff"><?= $p['badge'] ?></span>
        </div>
        <div class="product-card__body">
          <p class="product-card__sub" style="color:<?= $p['color'] ?>"><?= $p['subtitle'] ?></p>
          <h3 class="product-card__name"><?= $p['name'] ?></h3>
          <p class="product-card__desc"><?= substr($p['description'],0,110) ?>…</p>
          <a href="/product-detail.php?id=<?= $p['id'] ?>" class="product-card__link" style="color:<?= $p['color'] ?>">
            View Full Details →
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════ STATS ════ -->
<section class="section--dark">
  <div class="stats-bar">
    <div class="stat-item reveal">
      <span class="stat-num" data-target="3" data-suffix="+">0+</span>
      <span class="stat-label">Premium Formulas</span>
    </div>
    <div class="stat-item reveal delay-1">
      <span class="stat-num" data-target="22" data-suffix="">0</span>
      <span class="stat-label">Active Nutrients (VitBest)</span>
    </div>
    <div class="stat-item reveal delay-2">
      <span class="stat-num" data-target="100" data-suffix="%">0%</span>
      <span class="stat-label">Dietary Supplement Quality</span>
    </div>
    <div class="stat-item reveal delay-3">
      <span class="stat-num" data-target="18" data-suffix=" mo">0 mo</span>
      <span class="stat-label">Average Shelf Life</span>
    </div>
  </div>
</section>

<!-- ════ WHY US STRIP ════ -->
<section class="section section--cream">
  <div class="container grid-2">
    <div class="reveal">
      <span class="eyebrow">The Torcy Standard</span>
      <h2>Committed for<br>Good Health.</h2>
      <p class="lead" style="margin-top:1rem">We don't just put ingredients on a label. Every formulation is built around clinical evidence and bioavailability — so your body actually absorbs what it needs.</p>
      <a href="/why-us.php" class="btn btn-outline" style="margin-top:1.5rem">Our Standards</a>
    </div>
    <div class="feature-grid reveal delay-1">
      <div class="feature-item">
        <span class="feature-icon">🧪</span>
        <h4>Evidence-Based</h4>
        <p>Every ingredient at clinically supported doses.</p>
      </div>
      <div class="feature-item">
        <span class="feature-icon">🛡️</span>
        <h4>GMP Certified</h4>
        <p>Manufactured under strict quality protocols.</p>
      </div>
      <div class="feature-item">
        <span class="feature-icon">⚗️</span>
        <h4>High Bioavailability</h4>
        <p>Active nutrient forms your body easily absorbs.</p>
      </div>
      <div class="feature-item">
        <span class="feature-icon">👨‍👩‍👧‍👦</span>
        <h4>For the Whole Family</h4>
        <p>Safe for pregnancy, children, adults and seniors.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ FAMILY PHOTO ════ -->
<section class="section section--dark" style="position:relative;overflow:hidden;padding:0">
  <div style="position:relative;min-height:480px;display:flex;align-items:center">
    <img src="/assets/images/hero-family.png" alt="Healthy Canadian family" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.25">
    <div class="container" style="position:relative;z-index:2;text-align:center;padding-top:5rem;padding-bottom:5rem">
      <h2 class="reveal">Start Your Family's<br>Health Journey Today.</h2>
      <p class="lead reveal delay-1 mx-auto" style="color:rgba(255,255,255,.75);margin-top:1rem">Trusted by families across Canada. Premium nutrition that fits every stage of life.</p>
      <div class="reveal delay-2" style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
        <a href="/products.php" class="btn btn-white">Shop Products</a>
        <a href="/contact.php" class="btn btn-ghost">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
