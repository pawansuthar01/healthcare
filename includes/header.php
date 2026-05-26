<?php
require_once __DIR__ . '/config.php';
$page_title = $page_title ?? 'Torcy Healthcare';
$page_desc  = $page_desc  ?? 'Torcy Healthcare — Premium nutraceuticals for your entire family.';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($page_title) ?> | Torcy Healthcare</title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<meta name="theme-color" content="#00B4D8">
<link rel="icon" type="image/png" href="/assets/images/favicon.png">
<link rel="apple-touch-icon" href="/assets/images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Lora:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>

<!-- ══ SIDEBAR OVERLAY ══ -->
<div class="sidebar-overlay" id="sidebar-overlay"></div>

<!-- ══ SIDEBAR DRAWER ══ -->
<aside class="sidebar" id="sidebar" aria-label="Mobile navigation">
  <div class="sidebar-header">
    <div class="sidebar-logo">
      <img src="/assets/images/logo.png" alt="Torcy Healthcare">
    </div>
    <button class="sidebar-close" id="sidebar-close" aria-label="Close menu">✕</button>
  </div>
  <nav class="sidebar-nav">
    <a href="/index.php"        class="<?= is_active('index.php') ?>">🏠 Home</a>
    <a href="/products.php"     class="<?= is_active('products.php') ?>">💊 Products</a>
    <a href="/about.php"        class="<?= is_active('about.php') ?>">🌿 About Us</a>
    <a href="/why-us.php"       class="<?= is_active('why-us.php') ?>">🛡️ Why Torcy</a>
    <a href="/contact.php"      class="<?= is_active('contact.php') ?>">📞 Contact</a>
  </nav>
  <div class="sidebar-footer">
    <a href="mailto:<?= SITE_EMAIL ?>" class="sidebar-contact-link">✉ <?= SITE_EMAIL ?></a>
    <a href="tel:<?= preg_replace('/[^+\d]/','',(string)SITE_PHONE) ?>" class="sidebar-contact-link">📞 <?= SITE_PHONE ?></a>
    <a href="/contact.php" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:1rem">Get in Touch</a>
  </div>
</aside>

<!-- ══ TOP NAVBAR ══ -->
<header class="site-header" id="site-header">
  <div class="container nav-inner">

    <!-- Logo -->
    <a href="/index.php" class="nav-logo" aria-label="Torcy Healthcare Home">
      <img src="/assets/images/logo.png" alt="Torcy Healthcare logo">
      <div class="nav-logo-text">
        <span class="nav-logo-name">Torcy</span>
        <span class="nav-logo-tag">Healthcare</span>
      </div>
    </a>

    <!-- Desktop links -->
    <nav class="nav-links" aria-label="Main navigation">
      <a href="/index.php"    class="<?= is_active('index.php') ?>">Home</a>
      <a href="/products.php" class="<?= is_active('products.php') ?> <?= is_active('product-detail.php') ?>">Products</a>
      <a href="/about.php"    class="<?= is_active('about.php') ?>">About</a>
      <a href="/why-us.php"   class="<?= is_active('why-us.php') ?>">Why Torcy</a>
      <a href="/contact.php"  class="<?= is_active('contact.php') ?>">Contact</a>
    </nav>

    <div class="nav-right">
      <a href="/contact.php" class="btn btn-primary nav-cta-desk">Get in Touch</a>
      <!-- Hamburger -->
      <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>

<main id="main">
