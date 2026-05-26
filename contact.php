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
    <span class="eyebrow">We'd Love to Hear From You</span>
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
        <div class="contact-business-hours">
          <p class="contact-business-hours__text"><strong>Business Hours</strong><br>Monday – Friday: 9:00 AM – 5:00 PM EST</p>
        </div>
      </div>

      <!-- Form -->
      <div class="contact-form-wrap reveal delay-1">
        <h2 class="contact-form-title">Send a Message</h2>

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
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- Google Maps -->
<div class="map-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6719.280195802406!2d-79.2861996622385!3d43.75584585583369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d1f72731e74b%3A0x955dd44249e29f82!2s127%20Vauxhall%20Dr%2C%20Scarborough%2C%20ON%20M1P%201R5%2C%20Canada!5e0!3m2!1sen!2sin!4v1779823461063!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
 
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
