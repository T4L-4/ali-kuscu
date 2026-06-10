<?php
$base_path = '../';
$page_title = 'Yazılım Atölyesi | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Modern web teknolojileri, Python ile algoritma geliştirme ve yapay zekaya giriş eğitimleri sunuyoruz.';

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/disclaimer.php';
?>
  <!-- Detail Content Section -->
  <main class="detail-container">
    <span class="section-tag">Faaliyet Detayı</span>
    <h1 class="section-title">Yazılım Atölyesi</h1>

    <div class="detail-meta-grid">
      <div class="detail-meta-item">
        <h4>Eğitmen</h4>
        <p>Mustafa Çelik</p>
      </div>
      <div class="detail-meta-item">
        <h4>Zamanlama</h4>
        <p>Her Cumartesi, 14:00 - 17:00</p>
      </div>
      <div class="detail-meta-item">
        <h4>Kontenjan</h4>
        <p>20 Kişi (Aktif)</p>
      </div>
    </div>

    <div class="detail-content">
      <p>
        Ali Kuşçu'nun matematik ve astronomideki analitik bakış açısını günümüz teknolojisiyle buluşturuyoruz. Yazılım
        Atölyemizde, gençlerin dijital dünyada sadece tüketici değil, üretici olmalarını hedefliyoruz.
      </p>

      <h2>Atölye Kapsamı</h2>
      <p>
        Eğitimlerimiz sıfırdan başlayarak ileri seviye projelere kadar uzanmaktadır. Kursiyerlerimiz teorik bilginin
        yanında pratik kodlama seansları ile kendi projelerini geliştirirler. Başlıca konular şunlardır:
      </p>
      <ul>
        <li>Python ile Programlamaya Giriş ve Algoritmik Düşünce</li>
        <li>Web Geliştirme Temelleri (HTML5, CSS3, Javascript)</li>
        <li>Git & GitHub ile Versiyon Kontrol Sistemleri</li>
        <li>Temel Veri Tabanı Yapıları ve SQL</li>
        <li>Yapay Zekanın Temelleri ve Model Eğitimi</li>
      </ul>

      <h2>Kimler Katılabilir?</h2>
      <p>
        Atölyemiz 15-25 yaş arası yazılıma ve teknolojiye ilgi duyan tüm gençlere açıktır. Herhangi bir ön kodlama
        bilgisi gerekmemektedir; öğrenme arzusu ve bilgisayarınızla gelmeniz yeterlidir.
      </p>

      <div style="margin-top: 50px;">
        <a href="<?php echo $base_path; ?>index.php#activities" class="btn btn-primary">&larr; Faaliyetlere Geri Dön</a>
      </div>
    </div>
  </main>
<?php
include '../includes/footer.php';
?>
