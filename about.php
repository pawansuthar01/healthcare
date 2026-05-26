<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'About Us';
require_once __DIR__ . '/includes/header.php';
?>
<div class="page-hero">
  <div class="container">
    <span class="eyebrow">Our Story</span>
    <h1>The Torcy Story</h1>
    <p>A Canadian brand built on one belief: better nutrition starts with better science.</p>
  </div>
</div>

<section class="section">
  <div class="container grid-2">
    <div class="reveal">
      <span class="eyebrow">Founded on Science</span>
      <h2>Science First.<br>Marketing Second.</h2>
      <p class="lead" style="margin-top:1rem">The supplement industry is full of hype. We built Torcy Healthcare to change that. Every decision we make starts with clinical evidence — not marketing trends.</p>
      <p>Based in Scarborough, Ontario, we saw a growing need for trustworthy, bioavailable supplements for every stage of life. Whether you're a new mother, a growing child, a working adult, or a senior — we have a formula for you.</p>
      <a href="/why-us.php" class="btn btn-outline" style="margin-top:1.5rem">Our Quality Promise</a>
    </div>
    <div class="reveal delay-1" style="background:var(--green-700);border-radius:var(--r-lg);padding:3rem;color:#fff;position:relative;overflow:hidden">
      <div style="position:absolute;top:-60px;right:-60px;width:200px;height:200px;background:radial-gradient(circle,var(--coral) 0%,transparent 70%);opacity:.5"></div>
      <span style="font-size:4rem;display:block;margin-bottom:1.5rem">🇮🇳</span>
      <h3 style="color:#fff;font-size:1.8rem;margin-bottom:1rem">Proudly indian.</h3>
      <p style="color:rgba(255,255,255,.75)">Headquartered in Scarborough, Ontario. We adhere to some of the strictest health product standards in the world, ensuring every Torcy product is safe, pure and effective.</p>
      <p style="color:rgba(255,255,255,.5);font-size:.85rem;margin-top:1.5rem">127, Vauxhall Drive, Scarborough M1P 1R5, Canada</p>
    </div>
  </div>
</section>

<section class="section section--gray">
  <div class="container text-center">
    <div style="max-width:800px;margin:0 auto">
      <span class="eyebrow reveal">Vision & Mission</span>
      <h2 class="reveal">What Drives Us</h2>
      <div class="grid-2 reveal delay-1" style="text-align:left;margin-top:2.5rem;gap:1.5rem">
        <div class="info-box info-box--green" style="border-left-width:4px;border-left-style:solid;border-color:var(--green-500)">
          <h4 style="color:var(--green-500)">🎯 Our Vision</h4>
          <p>To be the most trusted name in family nutrition — recognized globally for uncompromising quality and measurable health outcomes.</p>
        </div>
        <div class="info-box info-box--green" style="border-left-width:4px;border-left-style:solid;border-color:var(--coral)">
          <h4 style="color:var(--coral)">🚀 Our Mission</h4>
          <p>To engineer premium dietary supplements that bridge nutritional gaps in modern diets, using evidence-backed ingredients in highly bioavailable forms.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--dark text-center">
  <div class="container">
    <h2 class="reveal">"Committed for Good Health."</h2>
    <p class="lead mx-auto reveal delay-1" style="color:rgba(255,255,255,.7);margin-top:1rem">This isn't a tagline. It's our founding promise — and every product we make is built to honour it.</p>
    <a href="/products.php" class="btn btn-white reveal delay-2" style="margin-top:2rem">Explore Our Products</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
