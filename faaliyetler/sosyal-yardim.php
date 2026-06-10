<?php
$base_path = '../';
$page_title = 'Sosyal Yardım Projeleri | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Çevremizdeki ihtiyaç sahiplerine el uzatıyor, sosyal sorumluluk projeleri ile yardımlaşma bilincini yayıyoruz.';

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/disclaimer.php';
?>
  <!-- Detail Content Section -->
  <main class="detail-container">
    <span class="section-tag">Faaliyet Detayı</span>
    <h1 class="section-title">Sosyal Yardım</h1>

    <div class="detail-meta-grid">
      <div class="detail-meta-item">
        <h4>Sorumlu</h4>
        <p>Fatma Arslan</p>
      </div>
      <div class="detail-meta-item">
        <h4>Odak Alanları</h4>
        <p>Gıda Kolisi, Eğitim Desteği, Çevre Temizliği</p>
      </div>
      <div class="detail-meta-item">
        <h4>Katılım</h4>
        <p>Gönüllülük Esaslı</p>
      </div>
    </div>

    <div class="detail-content">
      <p>
        Bilgi ve inanç, eyleme döküldüğünde ve topluma fayda sağladığında gerçek değerini bulur. Sosyal Yardım
        grubumuzla mahallemizdeki ve şehrimizdeki ihtiyaç sahiplerine umut olmaya çalışıyoruz.
      </p>

      <h2>Projelerimiz</h2>
      <p>
        Genç gönüllülerimizle birlikte yıl boyunca çeşitli alanlarda yardım kampanyaları ve saha çalışmaları
        yürütüyoruz:
      </p>
      <ul>
        <li><strong>Eğitim Desteği:</strong> İhtiyaç sahibi ilkokul ve ortaokul öğrencilerine kırtasiye seti ve ders
          kitabı temini.</li>
        <li><strong>Gıda ve İhtiyaç Kartı Dağıtımı:</strong> Tespit edilen dar gelirli ailelere düzenli gıda yardımı
          organizasyonu.</li>
        <li><strong>Çevre ve Doğa Timi:</strong> Belirli aralıklarla parklarda, ormanlık alanlarda çevre temizliği ve
          ağaç dikim faaliyetleri.</li>
        <li><strong>Yetim Kardeş Projesi:</strong> Yetim çocuklara yönelik sosyal ve kültürel etkinlikler, geziler
          düzenleme.</li>
      </ul>

      <h2>Nasıl Gönüllü Olabilirsiniz?</h2>
      <p>
        Sosyal yardımlaşma faaliyetlerimiz din, dil, ırk ayrımı gözetmeksizin ihtiyacı olan herkese yöneliktir. Saha
        çalışmalarında görev almak, paketleme yapmak veya lojistik destek sağlamak için Fatma Arslan ile iletişime
        geçebilirsiniz.
      </p>

      <div style="margin-top: 50px;">
        <a href="<?php echo $base_path; ?>index.php#activities" class="btn btn-primary">&larr; Faaliyetlere Geri Dön</a>
      </div>
    </div>
  </main>
<?php
include '../includes/footer.php';
?>
