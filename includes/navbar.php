<?php
if (!isset($base_path)) {
    $base_path = '';
}
if (!isset($is_home)) {
    $is_home = false;
}
$home_prefix = $is_home ? '' : $base_path . 'index.php';
?>  <!-- Header Section -->
  <header class="main-header <?php echo !$is_home ? 'scrolled' : ''; ?>" id="main-header">
    <div class="nav-container">
      <a href="<?php echo $home_prefix; ?>#hero" class="logo notranslate" id="nav-logo">
        <span>Ali Kuşçu</span> Camii
      </a>
      <ul class="nav-links" id="nav-links">
        <li><a href="<?php echo $home_prefix; ?>#hero" class="<?php echo $is_home ? 'active' : ''; ?>" id="link-hero">Giriş</a></li>
        <li><a href="<?php echo $home_prefix; ?>#life" id="link-life">Ali Kuşçu Kimdir?</a></li>
        <li><a href="<?php echo $base_path; ?>faaliyetler.php" id="link-activities">Faaliyetlerimiz</a></li>
        <li><a href="<?php echo $base_path; ?>etkinlikler.php" id="link-events">Etkinlikler</a></li>
        <li><a href="<?php echo $home_prefix; ?>#contributors" id="link-contributors">Katkıda Bulunanlar</a></li>
      </ul>
      <div class="nav-actions">
        <div class="lang-selector notranslate">
          <button class="lang-btn" id="lang-btn">🌐 <span id="lang-text">TR</span></button>
          <div class="lang-dropdown" id="lang-dropdown">
            <a href="#" data-lang="tr">TR</a>
            <a href="#" data-lang="en">EN</a>
            <a href="#" data-lang="es">ES</a>
            <a href="#" data-lang="ar">AR</a>
          </div>
        </div>
        <button id="theme-toggle" class="theme-toggle-btn" aria-label="Tema Değiştir">🌙</button>
        <button class="menu-toggle" id="menu-toggle" aria-label="Menüyü Aç">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>
