<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Our Products';
require_once __DIR__ . '/includes/header.php';
$products = get_products();
?>

<div class="page-hero">
  <div class="container">
    <span class="eyebrow">Torcy Formulations</span>
    <h1>Premium Supplements</h1>
    <p>Three targeted formulas, each engineered for maximum bioavailability and real health outcomes.</p>
  </div>
</div>

<section class="section">
  <div class="container">
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
          <p class="product-card__desc"><?= $p['description'] ?></p>
          <?php if($p['flavor']): ?>
          <p style="font-size:.82rem;color:var(--gray-400);font-weight:600;margin-bottom:1rem">🍫 <?= $p['flavor'] ?> · <?= $p['net_weight'] ?></p>
          <?php endif; ?>
          <a href="/product-detail.php?id=<?= $p['id'] ?>" class="product-card__link" style="color:<?= $p['color'] ?>">
            View Full Details →
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Quality statement -->
<section class="section section--dark text-center">
  <div class="container">
    <h2 class="reveal">100% Dietary Supplement Quality</h2>
    <p class="lead mx-auto reveal delay-1" style="color:rgba(255,255,255,.72);margin-top:1rem">All Torcy products are manufactured under strict GMP-compliant protocols, ensuring purity, potency and safety.</p>
    <a href="/why-us.php" class="btn btn-ghost reveal delay-2" style="margin-top:2rem">Our Quality Standards</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
