<?php
$base_path = '';
$page_title = 'Katkıda Bulunanlar | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Camimizin gençlik, ilim ve bilim vizyonuna katkıda bulunan tüm değerli destekçilerimiz ve eğitmenlerimiz.';

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/disclaimer.php';
?>
  <!-- Page Header -->
  <section class="section" style="padding-top: 160px; padding-bottom: 20px;">
    <div class="section-header">
      <span class="section-tag">Birlikte Güçlüyüz</span>
      <h1 class="section-title">Destekçilerimiz</h1>
      <p class="section-desc">Camimizin gençlik, ilim ve bilim vizyonuna katkıda bulunan tüm değerli destekçilerimiz ve
        eğitmenlerimiz.</p>
    </div>
  </section>

  <!-- Search & Grid Section -->
  <section class="section" style="padding-top: 0;">
    <div class="search-container">
      <input type="text" id="contributor-search" class="search-input"
        placeholder="Destekçi ismi veya ünvanı ara (Örn: Mehmet, Eğitmen)..." />
    </div>

    <div class="team-grid-4" id="contributors-grid-all" data-json-path="katkida_bulunanlar.json">
      <!-- Loaded and filtered dynamically via script.js -->
    </div>

    <div style="text-align: center; margin-top: 60px;">
      <a href="index.php" class="btn btn-secondary">&larr; Ana Sayfaya Dön</a>
    </div>
  </section>
<?php
include 'includes/footer.php';
?>
