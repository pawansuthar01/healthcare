<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Why Choose Torcy Healthcare';
require_once __DIR__ . '/includes/header.php';
?>
<div class="page-hero">
  <div class="container">
    <span class="eyebrow" style="color:var(--green-200)">The Torcy Difference</span>
    <h1>Why Choose Us?</h1>
    <p>We hold our formulations to a higher standard — here is exactly what that means for your health.</p>
  </div>
</div>

<section class="section">
  <div class="container grid-2">
    <div class="reveal">
      <span class="eyebrow">Bioavailability First</span>
      <h2>What You Absorb<br>Is What Matters.</h2>
      <p class="lead" style="margin-top:1rem">Most supplements fail your body before they even reach your bloodstream. Torcy uses only active, chelated or methylated forms of nutrients — the forms your cells immediately recognise.</p>
      <p>We choose bioavailability over cost. We choose efficacy over marketing claims. And we choose your long-term health over short-term profits.</p>
    </div>
    <div class="feature-grid reveal delay-1">
      <div class="feature-item">
        <span class="feature-icon">🧪</span>
        <h4>Clinical Dosage</h4>
        <p>Every ingredient dosed at levels supported by peer-reviewed clinical research.</p>
      </div>
      <div class="feature-item">
        <span class="feature-icon">🛡️</span>
        <h4>GMP Compliant</h4>
        <p>Manufactured in facilities operating under Good Manufacturing Practice (GMP) protocols.</p>
      </div>
      <div class="feature-item">
        <span class="feature-icon">🔬</span>
        <h4>Active Nutrient Forms</h4>
        <p>We use methylated B vitamins, chelated minerals and bioactive plant extracts.</p>
      </div>
      <div class="feature-item">
        <span class="feature-icon">✅</span>
        <h4>100% Transparent</h4>
        <p>No proprietary blends. No hidden fillers. What's on our label is what's in our product.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="stats-bar">
    <div class="stat-item reveal"><span class="stat-num" data-target="22" data-suffix="">0</span><span class="stat-label">Nutrients in VitBest</span></div>
    <div class="stat-item reveal delay-1"><span class="stat-num" data-target="100" data-suffix="%">0%</span><span class="stat-label">Transparency on Labels</span></div>
    <div class="stat-item reveal delay-2"><span class="stat-num" data-target="3" data-suffix="+">0+</span><span class="stat-label">Premium Product Lines</span></div>
    <div class="stat-item reveal delay-3"><span class="stat-num" data-target="0" data-suffix=" Fillers">0 Fillers</span><span class="stat-label">No Hidden Ingredients</span></div>
  </div>
</section>

<section class="section section--cream text-center">
  <div class="container">
    <h2 class="reveal">Ready to Experience<br>the Difference?</h2>
    <p class="lead mx-auto reveal delay-1" style="margin-top:1rem">Browse our full range of formulations and find the right supplement for your family.</p>
    <div class="reveal delay-2" style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;margin-top:2rem">
      <a href="/products.php" class="btn btn-primary">View All Products</a>
      <a href="/contact.php" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
