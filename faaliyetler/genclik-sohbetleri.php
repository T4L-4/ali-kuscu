<?php
$base_path = '../';
$page_title = 'Gençlik Sohbetleri | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Günümüz meselelerini akılcı, sorgulayıcı ve ahlaki bir perspektifle ele aldığımız dinamik buluşmalar.';

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/disclaimer.php';
?>
  <!-- Detail Content Section -->
  <main class="detail-container">
    <span class="section-tag">Faaliyet Detayı</span>
    <h1 class="section-title">Gençlik Sohbetleri</h1>

    <div class="detail-meta-grid">
      <div class="detail-meta-item">
        <h4>Koordinatör</h4>
        <p>Hasan Demir</p>
      </div>
      <div class="detail-meta-item">
        <h4>Zamanlama</h4>
        <p>Her Pazar, 18:30 (Akşam Namazı Sonrası)</p>
      </div>
      <div class="detail-meta-item">
        <h4>Ortam</h4>
        <p>Sıcak Çay ve Samimi Muhabbet</p>
      </div>
    </div>

    <div class="detail-content">
      <p>
        Gençlik Sohbetleri, gençlerin günümüz dünyasında karşılaştığı zihinsel, ahlaki ve toplumsal meseleleri,
        dogmalardan uzak, akılcı ve samimi bir ortamda ele aldığı haftalık buluşmalardır.
      </p>

      <h2>Sohbet Konuları ve Yaklaşımımız</h2>
      <p>
        Buluşmalarımızda tek taraflı bir anlatım yerine karşılıklı soru-cevap ve tartışma metodunu benimsiyoruz. Ana
        temalarımız:
      </p>
      <ul>
        <li>Modern dünyada genç olmak ve kimlik inşası</li>
        <li>Bilim, din ve felsefe ilişkisi: Çatışma mı, uyum mu?</li>
        <li>Kişisel ahlak, karakter gelişimi ve toplumsal sorumluluk</li>
        <li>Sosyal medyanın hayatımıza etkileri ve dijital detoks</li>
        <li>Tarihten günümüze öncü şahsiyetlerin hayat hikayeleri ve dersler</li>
      </ul>

      <h2>Katılım Bilgileri</h2>
      <p>
        Sohbetlerimiz 15-28 yaş aralığındaki tüm genç erkek ve kadınlara (ayrı oturumlar veya ortak paneller şeklinde
        düzenlenmektedir) açıktır. Çayımız, kahvemiz ve ikramlarımız eşliğinde zihninizi dinlendirmek ve yeni bakış
        açıları kazanmak için davetlisiniz.
      </p>

      <div style="margin-top: 50px;">
        <a href="<?php echo $base_path; ?>index.php#activities" class="btn btn-primary">&larr; Faaliyetlere Geri Dön</a>
      </div>
    </div>
  </main>
<?php
include '../includes/footer.php';
?>
