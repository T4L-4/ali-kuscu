<?php
$base_path = '../';
$page_title = 'Astronomi Gözlemleri | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Ali Kuşçu\'nun izinde teleskoplarla gökyüzünü inceliyor, uzay ve gök mekaniği üzerine sohbet ediyoruz.';

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/disclaimer.php';
?>
  <!-- Detail Content Section -->
  <main class="detail-container">
    <span class="section-tag">Faaliyet Detayı</span>
    <h1 class="section-title">Astronomi Gözlemleri</h1>

    <div class="detail-meta-grid">
      <div class="detail-meta-item">
        <h4>Koordinatör</h4>
        <p>Ömer Faruk Özkan</p>
      </div>
      <div class="detail-meta-item">
        <h4>Zamanlama</h4>
        <p>Her Ayın İlk Cuma Gecesi (Yatsı Namazı Sonrası)</p>
      </div>
      <div class="detail-meta-item">
        <h4>Ekipmanlar</h4>
        <p>Yansıtmalı Teleskoplar & Yıldız Haritaları</p>
      </div>
    </div>

    <div class="detail-content">
      <p>
        Camimize adını veren büyük astronom Ali Kuşçu'nun gökyüzüne bakışını, onun mirasını yaşatmak adına yeniden
        canlandırıyoruz. Teleskoplarımızla Ay yüzeyini, gezegenleri ve takımyıldızlarını gözlemliyoruz.
      </p>

      <h2>Neler Yapıyoruz?</h2>
      <p>
        Gökyüzü gözlemlerimiz yalnızca teleskop arkasında geçmez. Gecenin sessizliğinde, uzayın sırları üzerine bilimsel
        ve felsefi okumalar gerçekleştiriyoruz:
      </p>
      <ul>
        <li>Gözlem öncesi temel gök mekaniği ve astrofizik seminerleri</li>
        <li>Teleskop kullanımı, odaklama ve gök cisimlerini takip etme pratikleri</li>
        <li>Takımyıldızlarının tespiti ve yıldız haritası okuma eğitimi</li>
        <li>Uzay araştırmaları ve yapay uyduların yörünge mekaniği üzerine söyleşiler</li>
        <li>Hava durumunun uygun olmadığı günlerde simülasyon eşliğinde iç mekan sunumları</li>
      </ul>

      <h2>Ali Kuşçu'nun Mirası</h2>
      <p>
        Ali Kuşçu, Semerkant Rasathanesi'nde edindiği tecrübeyi İstanbul'a taşımış ve gezegenlerin hareketlerine dair
        özgün teoriler geliştirmiştir. Amacımız, gençlerimizin bu vizyonu anlayarak günümüzün uzay ve havacılık
        çalışmalarında öncü roller üstlenmesini sağlamaktır.
      </p>

      <div style="margin-top: 50px;">
        <a href="<?php echo $base_path; ?>index.php#activities" class="btn btn-primary">&larr; Faaliyetlere Geri Dön</a>
      </div>
    </div>
  </main>
<?php
include '../includes/footer.php';
?>
