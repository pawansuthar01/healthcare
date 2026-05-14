<?php require_once __DIR__ . '/config.php'; ?>
</main>

<!-- ════ FOOTER ════ -->
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-brand">
        <a href="/index.php" class="nav-logo" style="margin-bottom:1rem;display:inline-flex">
        <img src="/assets/images/logo.png" alt="Torcy Healthcare" style="height:38px;filter:brightness(0) invert(1)">
        <div class="nav-logo-text" style="margin-left:.6rem">
          <span class="nav-logo-name">Torcy</span>
          <span class="nav-logo-tag">Healthcare</span>
        </div>
      </a>
        <p class="footer-about">A trusted Canadian nutraceutical brand delivering evidence-backed nutrition for every stage of life — from children to seniors.</p>
        <address style="font-style:normal;font-size:.85rem;line-height:1.8"><?= SITE_ADDRESS ?></address>
      </div>

      <div class="footer-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a href="/about.php">About Us</a></li>
          <li><a href="/products.php">Our Products</a></li>
          <li><a href="/why-us.php">Why Torcy</a></li>
          <li><a href="/contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Products</h4>
        <ul>
          <?php foreach(get_products() as $p): ?>
          <li><a href="/product-detail.php?id=<?= $p['id'] ?>"><?= $p['name'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact Us</h4>
        <div class="footer-contact-item">
          <span>📍</span>
          <span><?= SITE_ADDRESS ?></span>
        </div>
        <div class="footer-contact-item">
          <span>✉</span>
          <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
        </div>
        <div class="footer-contact-item">
          <span>📞</span>
          <a href="tel:<?= preg_replace('/[^+\d]/','',(string)SITE_PHONE) ?>"><?= SITE_PHONE ?></a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Torcy Healthcare. All rights reserved.</p>
      <p class="footer-disclaimer">Dietary supplements only. Not intended to diagnose, treat, cure or prevent any disease. Consult your healthcare provider before use.</p>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
