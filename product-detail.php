<?php
require_once __DIR__ . '/includes/config.php';
$id = trim($_GET['id'] ?? '');
$p  = get_product_by_id($id);
if (!$p) { header('Location: /products.php'); exit; }
$page_title = $p['name'].' — '.$p['subtitle'];
require_once __DIR__ . '/includes/header.php';
?>

<!-- ════ PRODUCT HERO ════ -->
<div style="background:<?= $p['bg'] ?>;padding:clamp(2rem,4vw,4rem) 0;margin-top:0;padding-top:calc(var(--nav-h) + clamp(2rem,4vw,3rem))">
  <div class="container">
    <a href="/products.php" style="display:inline-flex;align-items:center;gap:.4rem;font-size:.85rem;font-weight:600;color:<?= $p['color'] ?>;margin-bottom:2rem;opacity:.8">← All Products</a>
    <div class="grid-2" style="gap:4rem">

      <!-- Image -->
      <div class="product-detail-img reveal" style="background:white;border-radius:var(--r-lg);box-shadow:var(--sh-lg)">
        <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" style="max-height:420px;object-fit:contain">
      </div>

      <!-- Info -->
      <div class="product-detail-info reveal delay-1">
        <span class="eyebrow" style="color:<?= $p['color'] ?>"><?= $p['badge'] ?></span>
        <h1><?= $p['name'] ?></h1>
        <p class="product-subtitle-lg"><?= $p['subtitle'] ?> · <?= $p['tagline'] ?></p>

        <div class="product-meta-row">
          <div class="meta-chip">
            <label>Net Weight</label>
            <span><?= $p['net_weight'] ?></span>
          </div>
          <?php if($p['flavor']): ?>
          <div class="meta-chip">
            <label>Flavour</label>
            <span><?= $p['flavor'] ?></span>
          </div>
          <?php endif; ?>
          <?php if($p['sugar_free']): ?>
          <div class="meta-chip">
            <label>Dietary</label>
            <span style="color:var(--coral)">Sugar Free ✓</span>
          </div>
          <?php endif; ?>
          <div class="meta-chip">
            <label>Shelf Life</label>
            <span><?= $p['shelf_life'] ?></span>
          </div>
        </div>

        <p class="lead" style="font-size:1rem"><?= $p['description'] ?></p>

        <ul class="highlights-list">
          <?php foreach($p['highlights'] as $h): ?>
          <li><?= $h ?></li>
          <?php endforeach; ?>
        </ul>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:2rem">
          <a href="/contact.php" class="btn btn-primary" style="background:<?= $p['color'] ?>;box-shadow:0 8px 24px <?= $p['color'] ?>44">Enquire Now</a>
          <a href="#composition" class="btn btn-outline" style="color:<?= $p['color'] ?>;border-color:<?= $p['color'] ?>">View Composition</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ════ SPECS ════ -->
<section id="composition" class="section">
  <div class="container grid-2" style="align-items:flex-start">

    <div class="reveal">
      <h2 style="font-size:2rem;margin-bottom:1.5rem">Nutritional Composition</h2>
      <table class="specs-table">
        <thead>
          <tr><th>Nutrient / Ingredient</th><th>Amount</th></tr>
        </thead>
        <tbody>
          <?php foreach($p['composition'] as $k=>$v): ?>
          <tr><td><strong><?= $k ?></strong></td><td><?= $v ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <p style="font-size:.78rem;color:var(--gray-400);margin-top:.75rem">* Appropriate overages added to compensate for nutrient loss during storage.</p>
    </div>

    <div class="reveal delay-1">
      <h2 style="font-size:2rem;margin-bottom:1.5rem">Usage Guide</h2>

      <div class="info-box info-box--green">
        <h4>Recommended Dosage</h4>
        <p><?= $p['directions'] ?></p>
      </div>

      <div class="info-box info-box--gray">
        <h4>Storage Instructions</h4>
        <p><?= $p['storage'] ?><br><strong>Shelf Life:</strong> <?= $p['shelf_life'] ?> from date of manufacture.</p>
      </div>

      <div class="info-box info-box--red">
        <h4 style="color:#c53030">Warnings</h4>
        <p style="color:#c53030"><?= $p['warning'] ?></p>
      </div>
    </div>

  </div>
</section>

<!-- ════ OTHER PRODUCTS ════ -->
<section class="section section--gray">
  <div class="container">
    <h3 class="reveal" style="margin-bottom:2rem">Explore Other Formulas</h3>
    <div class="products-grid">
      <?php foreach(get_products() as $i=>$op): if($op['id']===$p['id']) continue; ?>
      <div class="product-card reveal delay-<?= $i+1 ?>">
        <div class="product-card__img" style="background:<?= $op['bg'] ?>">
          <img src="<?= $op['image'] ?>" alt="<?= $op['name'] ?>">
        </div>
        <div class="product-card__body">
          <p class="product-card__sub" style="color:<?= $op['color'] ?>"><?= $op['subtitle'] ?></p>
          <h3 class="product-card__name"><?= $op['name'] ?></h3>
          <a href="/product-detail.php?id=<?= $op['id'] ?>" class="product-card__link" style="color:<?= $op['color'] ?>">View Details →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
