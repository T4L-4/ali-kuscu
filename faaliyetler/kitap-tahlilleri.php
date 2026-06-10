<?php
$base_path = '../';
$page_title = 'Kitap Tahlilleri | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Bilim tarihi, felsefe, edebiyat ve fikir eserlerini her hafta derinlemesine analiz ediyor ve tartışıyoruz.';

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/disclaimer.php';
?>
  <!-- Detail Content Section -->
  <main class="detail-container">
    <span class="section-tag">Faaliyet Detayı</span>
    <h1 class="section-title">Kitap Tahlilleri</h1>

    <div class="detail-meta-grid">
      <div class="detail-meta-item">
        <h4>Koordinatör</h4>
        <p>Zeynep Korkmaz</p>
      </div>
      <div class="detail-meta-item">
        <h4>Zamanlama</h4>
        <p>Her İki Haftada Bir, Pazar 14:00</p>
      </div>
      <div class="detail-meta-item">
        <h4>Kütüphane</h4>
        <p>Ali Kuşçu Kitaplığı</p>
      </div>
    </div>

    <div class="detail-content">
      <p>
        Okumak, evreni ve kendini anlama yolculuğunun ilk adımıdır. Kitap Tahlilleri kulübümüzde, gençlerle birlikte her
        iki haftada bir belirlediğimiz nitelikli eserleri derinlemesine inceliyoruz.
      </p>

      <h2>Okuma Listemiz ve Kriterler</h2>
      <p>
        Tek bir alana sıkışıp kalmadan; bilim tarihi, felsefe, edebiyat, sosyoloji ve İslam düşüncesi gibi geniş bir
        yelpazeden eserler seçiyoruz. Tahlillerimizde:
      </p>
      <ul>
        <li>Yazarın hayatı, dönemi ve eserin yazılış amacı incelenir.</li>
        <li>Kitabın ana fikirleri ve argümanları tartışılarak eleştirel analiz süzgecinden geçirilir.</li>
        <li>Eserdeki fikirlerin günümüz dünyasındaki yansımaları değerlendirilir.</li>
        <li>Katılımcıların kendi fikirlerini özgürce ve saygı çerçevesinde ifade etmesi teşvik edilir.</li>
      </ul>

      <h2>Nasıl Katılırsınız?</h2>
      <p>
        Okuma kulübümüze katılmak için öncelikle kütüphane sorumlumuz Zeynep Korkmaz ile iletişime geçerek o haftaki
        kitabı temin edebilir veya kendi imkanlarınızla okuyarak tahlil oturumuna katılabilirsiniz. Kitabı tamamen
        bitirmemiş olsanız dahi tartışmaları dinlemek ve fikir edinmek için katılabilirsiniz.
      </p>

      <div style="margin-top: 50px;">
        <a href="<?php echo $base_path; ?>index.php#activities" class="btn btn-primary">&larr; Faaliyetlere Geri Dön</a>
      </div>
    </div>
  </main>
<?php
include '../includes/footer.php';
?>
