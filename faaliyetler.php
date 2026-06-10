<?php
$base_path = '';
$page_title = 'Tüm Faaliyetlerimiz | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Genç cemaatimiz için düzenlediğimiz aktif atölyeler, kulüpler ve gelişim programları.';

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/disclaimer.php';
?>
  <!-- Page Header -->
  <section class="section" style="padding-top: 160px; padding-bottom: 40px;">
    <div class="section-header">
      <span class="section-tag">Geniş Katılım</span>
      <h1 class="section-title">Tüm Faaliyetlerimiz</h1>
      <p class="section-desc">Genç cemaatimiz için düzenlediğimiz aktif atölyeler, kulüpler ve gelişim programları.</p>
    </div>
  </section>

  <!-- Activities Grid Section -->
  <section class="section" style="padding-top: 0;">
    <div class="activities-grid">
      <!-- Activity 1 -->
      <div class="activity-card">
        <div class="activity-icon">💻</div>
        <div class="activity-info">
          <h3>Yazılım Atölyesi</h3>
          <p>Modern web teknolojileri, Python ile algoritma geliştirme ve yapay zekaya giriş eğitimleri sunuyoruz.</p>
        </div>
        <a href="faaliyetler/yazilim-atolyesi.php" class="btn-link">Detayları Gör &rarr;</a>
      </div>

      <!-- Activity 2 -->
      <div class="activity-card">
        <div class="activity-icon">🔭</div>
        <div class="activity-info">
          <h3>Astronomi Gözlemleri</h3>
          <p>Ali Kuşçu'nun izinde, teleskoplarla gökyüzünü inceliyor, uzay ve gök mekaniği üzerine sohbet ediyoruz.</p>
        </div>
        <a href="faaliyetler/astronomi-gozlemleri.php" class="btn-link">Detayları Gör &rarr;</a>
      </div>

      <!-- Activity 3 -->
      <div class="activity-card">
        <div class="activity-icon">🗣️</div>
        <div class="activity-info">
          <h3>Gençlik Sohbetleri</h3>
          <p>Günümüz meselelerini akılcı, sorgulayıcı ve ahlaki bir perspektifle ele aldığımız dinamik buluşmalar.</p>
        </div>
        <a href="faaliyetler/genclik-sohbetleri.php" class="btn-link">Detayları Gör &rarr;</a>
      </div>

      <!-- Activity 4 -->
      <div class="activity-card">
        <div class="activity-icon">📚</div>
        <div class="activity-info">
          <h3>Kitap Tahlilleri</h3>
          <p>Bilim tarihi, felsefe, edebiyat ve fikir eserlerini her hafta derinlemesine analiz ediyor ve tartışıyoruz.
          </p>
        </div>
        <a href="faaliyetler/kitap-tahlilleri.php" class="btn-link">Detayları Gör &rarr;</a>
      </div>

      <!-- Activity 5 -->
      <div class="activity-card">
        <div class="activity-icon">🤝</div>
        <div class="activity-info">
          <h3>Sosyal Yardım</h3>
          <p>Çevremizdeki ihtiyaç sahiplerine el uzatıyor, sosyal sorumluluk projeleri ile yardımlaşma bilincini
            yayıyoruz.</p>
        </div>
        <a href="faaliyetler/sosyal-yardim.php" class="btn-link">Detayları Gör &rarr;</a>
      </div>

      <!-- Activity 6 -->
      <div class="activity-card">
        <div class="activity-icon">⚽</div>
        <div class="activity-info">
          <h3>Spor Etkinlikleri</h3>
          <p>Haftalık halı saha maçları, doğa yürüyüşleri ve masa tenisi turnuvaları ile dinamik ve zinde kalıyoruz.</p>
        </div>
        <a href="faaliyetler/spor-etkinlikleri.php" class="btn-link">Detayları Gör &rarr;</a>
      </div>
    </div>

    <div style="text-align: center; margin-top: 60px;">
      <a href="index.php" class="btn btn-secondary">&larr; Ana Sayfaya Dön</a>
    </div>
  </section>
<?php
include 'includes/footer.php';
?>
