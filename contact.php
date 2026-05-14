<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contact Us';
$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = sanitize_input($_POST['name']    ?? '');
    $email   = sanitize_input($_POST['email']   ?? '');
    $subject = sanitize_input($_POST['subject'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    if ($name && $email && $message) {
        // mail() can be configured later with SMTP
        $status = 'success';
    } else {
        $status = 'error';
    }
}
require_once __DIR__ . '/includes/header.php';
?>
<div class="page-hero">
  <div class="container">
    <span class="eyebrow" style="color:var(--green-200)">We'd Love to Hear From You</span>
    <h1>Get in Touch</h1>
    <p>Questions about our products, distribution inquiries, or just want to say hello — we're here.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="contact-layout">

      <!-- Info Card -->
      <div class="contact-card reveal">
        <h3>Contact Information</h3>
        <div class="c-method">
          <span class="c-icon">📍</span>
          <div class="c-text">
            <strong>Headquarters</strong>
            <p><?= SITE_ADDRESS ?></p>
          </div>
        </div>
        <div class="c-method">
          <span class="c-icon">✉</span>
          <div class="c-text">
            <strong>Email</strong>
            <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
          </div>
        </div>
        <div class="c-method">
          <span class="c-icon">📞</span>
          <div class="c-text">
            <strong>Phone</strong>
            <a href="tel:<?= preg_replace('/[^+\d]/','',(string)SITE_PHONE) ?>"><?= SITE_PHONE ?></a>
          </div>
        </div>
        <div style="border-top:1px solid rgba(255,255,255,.1);margin-top:1.5rem;padding-top:1.5rem">
          <p style="font-size:.85rem;color:rgba(255,255,255,.5)"><strong style="color:rgba(255,255,255,.7)">Business Hours</strong><br>Monday – Friday: 9:00 AM – 5:00 PM EST</p>
        </div>
      </div>

      <!-- Form -->
      <div class="contact-form-wrap reveal delay-1">
        <h2 style="margin-bottom:1.5rem;font-size:1.8rem">Send a Message</h2>

        <?php if($status==='success'): ?>
          <div class="alert alert-success">✅ Thank you! Your message has been received. We'll get back to you within 1–2 business days.</div>
        <?php elseif($status==='error'): ?>
          <div class="alert alert-error">⚠️ Please fill in all required fields (Name, Email, Message).</div>
        <?php endif; ?>

        <form action="/contact.php" method="POST" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="fname">Full Name *</label>
              <input type="text" id="fname" name="name" required placeholder="John Doe" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="femail">Email Address *</label>
              <input type="email" id="femail" name="email" required placeholder="john@example.com" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="fsubject">Subject</label>
            <input type="text" id="fsubject" name="subject" placeholder="e.g. Product Inquiry, Distribution, General Question" value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>">
          </div>
          <div class="form-group">
            <label for="fmessage">Message *</label>
            <textarea id="fmessage" name="message" required placeholder="Tell us how we can help…"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>
          <div class="form-submit">
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:1.1rem">Send Message</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- Map Placeholder -->
<div style="background:var(--gray-100);height:400px;display:flex;align-items:center;justify-content:center;border-top:1px solid var(--gray-200)">
  <div style="text-align:center;color:var(--gray-400)">
    <div style="font-size:3rem;margin-bottom:1rem">🗺️</div>
    <p style="font-weight:600;color:var(--gray-700)">Scarborough, Ontario M1P 1R5, Canada</p>
    <p style="font-size:.85rem">Google Maps integration available on the live server</p>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
