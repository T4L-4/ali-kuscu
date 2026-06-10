<?php
$base_path = '../';
$page_title = 'Spor Etkinlikleri | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Haftalık halı saha maçları, doğa yürüyüşleri ve masa tenisi turnuvaları ile dinamik ve zinde kalıyoruz.';

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/disclaimer.php';
?>
  <!-- Detail Content Section -->
  <main class="detail-container">
    <span class="section-tag">Faaliyet Detayı</span>
    <h1 class="section-title">Spor Etkinlikleri</h1>

    <div class="detail-meta-grid">
      <div class="detail-meta-item">
        <h4>Koordinatör</h4>
        <p>Gençlik Birliği</p>
      </div>
      <div class="detail-meta-item">
        <h4>Zamanlama</h4>
        <p>Hafta Sonu Dinamik Saatler</p>
      </div>
      <div class="detail-meta-item">
        <h4>Branşlar</h4>
        <p>Futbol, Masa Tenisi, Doğa Yürüyüşü</p>
      </div>
    </div>

    <div class="detail-content">
      <p>
        "Sağlam kafa sağlam vücutta bulunur." Gençlerimizin fiziksel sağlığını ve aralarındaki kardeşlik/arkadaşlık
        bağlarını güçlendirmek amacıyla çeşitli sportif faaliyetler organize ediyoruz.
      </p>

      <h2>Neler Yapıyoruz?</h2>
      <p>
        Haftalık rutinlerimizin yanı sıra mevsim şartlarına uygun turnuvalar ve dış mekân etkinlikleri
        gerçekleştiriyoruz:
      </p>
      <ul>
        <li><strong>Haftalık Halı Saha Maçları:</strong> Her Pazar akşamı mahallemizdeki halı sahada dostluk maçları
          yapıyoruz.</li>
        <li><strong>Masa Tenisi Turnuvaları:</strong> Gençlik merkezimizdeki masada düzenli olarak ödüllü turnuvalar
          düzenliyoruz.</li>
        <li><strong>Doğa Yürüyüşleri (Trekking):</strong> Ayda bir kez şehir stresinden uzaklaşmak, temiz hava almak ve
          yürüyüş yapmak için doğa gezileri organize ediyoruz.</li>
        <li><strong>Bisiklet Turları:</strong> Belirlenen rotalarda grup halinde bisiklet sürüşleri yapıyoruz.</li>
      </ul>

      <h2>Katılım Kuralları</h2>
      <p>
        Spor etkinliklerimiz tamamen ücretsiz olup, katılmak isteyen gençlerin spor kıyafetleri ve enerjileriyle
        gelmeleri yeterlidir. Katılım ve gruplara dahil olmak için gençlik merkezindeki panodan veya
        koordinatörlerimizden bilgi alabilirsiniz.
      </p>

      <div style="margin-top: 50px;">
        <a href="<?php echo $base_path; ?>index.php#activities" class="btn btn-primary">&larr; Faaliyetlere Geri Dön</a>
      </div>
    </div>
  </main>
<?php
include '../includes/footer.php';
?>
