<?php
$base_path = '';
$is_home = true;
$page_title = 'Ali Kuşçu Camii | İlim, Bilim ve Gençlik Merkezi';
$page_desc = 'Ali Kuşçu ve Fatih Sultan Mehmed\'in ilim ve fen mirasını geleceğe taşıyoruz. Gençliği bilim, teknoloji ve irfanla buluşturan cami.';

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/disclaimer.php';
?>
  <!-- Hero Section -->
  <section class="hero" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <span class="hero-badge" data-animate>İlim & Fen Yuvası</span>
      <h1 data-animate>Aklın ve Gönlün<br><span>Buluştuğu Merkez</span></h1>
      <blockquote class="hero-quote" data-animate>
        "Göklerin ve yerin sınırlarını çözmeye çalışan zihinler, geleceğin ışığıdır. Gençler! Fatih'in azmi ve Ali
        Kuşçu'nun ilmiyle ufkunuzu yıldızların da ötesine taşıyın."
        <a href="http://github.com/jawher/mow.clisaa">Tıklaaaa.....</a>
        <cite>— İlim ve Fen Çağrısı</cite>
      </blockquote>
      <div class="hero-actions" data-animate>
        <a href="#life" class="btn btn-primary" id="btn-discover">Keşfetmeye Başla</a>
        <a href="#activities" class="btn btn-secondary" id="btn-our-activities">Faaliyetlerimiz</a>
      </div>
    </div>
  </section>

  <!-- Next Event Countdown Section -->
  <section class="countdown-section" id="next-event-countdown">
    <div class="countdown-container">
      <div class="countdown-info" data-animate>
        <span class="section-tag">Yaklaşan Etkinlik...</span>
        <h2 class="countdown-event-title">Yazılım Geliştirme Kampı</h2>
        <p class="countdown-event-desc">
          Fatih Sultan Mehmed Han'ın mühendislik vizyonu ve Ali Kuşçu'nun astronomi mirasını günümüz kodlarıyla buluşturuyoruz. 
          3 günlük yoğunlaştırılmış yazılım kampımıza katılarak yerinizi şimdiden ayırtın!
        </p>
        <ul class="countdown-meta-list">
          <li>📍 <strong>Yer:</strong> Bilgisayar Laboratuvarı</li>
          <li>🗣️ <strong>Konuşmacı:</strong> Mustafa Çelik (Yazılım Eğitmeni)</li>
          <li>📅 <strong>Zaman:</strong> 15 Haziran 2026, 14:00</li>
        </ul>
        <div style="margin-top: 24px;">
          <a href="faaliyetler/yazilim-atolyesi.php" class="btn btn-primary">Etkinlik Detayı</a>
        </div>
      </div>
      
      <div class="countdown-widget" data-animate>
        <h3>Kayıtların Kapanmasına Kalan Süre</h3>
        <div class="timer-display" id="event-timer" data-target-date="2026-06-15T14:00:00+03:00">
          <div class="timer-segment">
            <span class="timer-num" id="days">00</span>
            <span class="timer-label">Gün</span>
          </div>
          <div class="timer-divider">:</div>
          <div class="timer-segment">
            <span class="timer-num" id="hours">00</span>
            <span class="timer-label">Saat</span>
          </div>
          <div class="timer-divider">:</div>
          <div class="timer-segment">
            <span class="timer-num" id="minutes">00</span>
            <span class="timer-label">Dakika</span>
          </div>
          <div class="timer-divider">:</div>
          <div class="timer-segment">
            <span class="timer-num" id="seconds">00</span>
            <span class="timer-label">Saniye</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ali Kuşçu & Fatih Section -->
  <section class="section" id="life">
    <div class="section-header">
      <span class="section-tag" data-animate>Büyük Miras</span>
      <h2 class="section-title" data-animate>İlim Yolunda Bir Deha:</h2>
      <h2 class="section-title" data-animate>Ali Kuşçu Kimdir?</h2>
      <p class="section-desc" data-animate>Fatih Sultan Mehmed Han ve Ali Kuşçu’nun bilime ve fenne verdiği eşsiz değer,
        genç nesillerimize ilham kaynağı olmaya devam ediyor.</p>
    </div>

    <div class="history-layout">
      <div class="history-text" data-animate>
        <p>
          Astronot, matematikçi ve dil bilimci <strong>Ali Kuşçu</strong>, Semerkant Rasathanesi'ndeki çalışmalarının
          ardından İstanbul'a davet edildiğinde, <strong>Fatih Sultan Mehmed</strong> onu Osmanlı sınırında büyük bir
          ilim heyetiyle karşılatmıştır. Fatih, bilimin devletin kalbi olduğuna inanıyor ve İstanbul'u bir dünya bilim
          merkezi haline getirmeyi hedefliyordu.
        </p>
        <p>
          Ali Kuşçu, Sahn-ı Seman Medreseleri'nin müfredatını hazırlayarak matematik ve astronomi derslerinin öncüsü
          oldu. Fatih Sultan Mehmed ile kurdukları bu ilim köprüsü, dinî ilimler ile fenni ilimlerin bir arada,
          birbirini dışlamadan nasıl yükselebileceğinin en büyük kanıtıdır.
        </p>
        <div class="history-highlight">
          "Bir toplumda ilim ve fenne önem verilmezse, o toplumun yarını karanlıktır. Bizim görevimiz, bu meşaleyi
          göklere taşımaktır."
        </div>
        <p>
          <strong>Genç Dostumuz!</strong> Bugün bu camide, sadece ibadet etmiyor; Ali Kuşçu'nun göklere yönelttiği
          teleskobu, Fatih'in dökümünü yaptığı havan toplarındaki mühendislik zekasını kuşanıyoruz. Hayatını ilim, bilim
          ve insanlığa fayda sağlama uğrunda şekillendirmen için burası senin evin.
        </p>
      </div>

      <div class="history-visual" data-animate>
        <div class="astro-diagram">
          <div class="astro-inner-circle">
            <div class="astro-core"></div>
            <div class="astro-orbit-node node-1"></div>
            <div class="astro-orbit-node node-2"></div>
          </div>
        </div>
        <div class="philosophy-card">
          <h3>Astronomi & Matematik</h3>
          <p>Yıldızların yörüngesinden bilgisayar kodlarına uzanan bilimsel yolculuk.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Activities Section -->
  <section class="section" id="activities" style="background: rgba(255,255,255,0.01);">
    <div class="section-header">
      <span class="section-tag" data-animate>Neler Yapıyoruz?</span>
      <h2 class="section-title" data-animate>Gençlik Faaliyetleri</h2>
      <p class="section-desc" data-animate>Akademik, sosyal ve sportif gelişimini destekleyecek atölye ve kulüplerimizle
        aktif bir topluluk inşa ediyoruz.</p>
    </div>

    <div class="activities-grid">
      <!-- Activity 1 -->
      <div class="activity-card" data-animate>
        <div class="activity-icon">💻</div>
        <div class="activity-info">
          <h3>Yazılım Atölyesi</h3>
          <p>Modern web teknolojileri, Python ile algoritma geliştirme ve yapay zekaya giriş eğitimleri sunuyoruz.</p>
        </div>
        <a href="faaliyetler/yazilim-atolyesi.php" class="btn-link" id="act-btn-yazilim">Detayları Gör
          <span>&rarr;</span></a>
      </div>

      <!-- Activity 2 -->
      <div class="activity-card" data-animate>
        <div class="activity-icon">🔭</div>
        <div class="activity-info">
          <h3>Astronomi Gözlemleri</h3>
          <p>Ali Kuşçu'nun izinde, teleskoplarla gökyüzünü inceliyor, uzay ve gök mekaniği üzerine sohbet ediyoruz.</p>
        </div>
        <a href="faaliyetler/astronomi-gozlemleri.php" class="btn-link" id="act-btn-astronomi">Detayları Gör
          <span>&rarr;</span></a>
      </div>

      <!-- Activity 3 -->
      <div class="activity-card" data-animate>
        <div class="activity-icon">🗣️</div>
        <div class="activity-info">
          <h3>Gençlik Sohbetleri</h3>
          <p>Günümüz meselelerini akılcı, sorgulayıcı ve ahlaki bir perspektifle ele aldığımız dinamik buluşmalar.</p>
        </div>
        <a href="faaliyetler/genclik-sohbetleri.php" class="btn-link" id="act-btn-sohbet">Detayları Gör
          <span>&rarr;</span></a>
      </div>

      <!-- Activity 4 -->
      <div class="activity-card" data-animate>
        <div class="activity-icon">📚</div>
        <div class="activity-info">
          <h3>Kitap Tahlilleri</h3>
          <p>Bilim tarihi, felsefe, edebiyat ve fikir eserlerini her hafta derinlemesine analiz ediyor ve tartışıyoruz.
          </p>
        </div>
        <a href="faaliyetler/kitap-tahlilleri.php" class="btn-link" id="act-btn-kitap">Detayları Gör
          <span>&rarr;</span></a>
      </div>

      <!-- Activity 5 -->
      <div class="activity-card" data-animate>
        <div class="activity-icon">🤝</div>
        <div class="activity-info">
          <h3>Sosyal Yardım</h3>
          <p>Çevremizdeki ihtiyaç sahiplerine el uzatıyor, sosyal sorumluluk projeleri ile yardımlaşma bilincini
            yayıyoruz.</p>
        </div>
        <a href="faaliyetler/sosyal-yardim.php" class="btn-link" id="act-btn-yardim">Detayları Gör
          <span>&rarr;</span></a>
      </div>

      <!-- Activity 6 -->
      <div class="activity-card" data-animate>
        <div class="activity-icon">⚽</div>
        <div class="activity-info">
          <h3>Spor Etkinlikleri</h3>
          <p>Haftalık halı saha maçları, doğa yürüyüşleri ve masa tenisi turnuvaları ile dinamik ve zinde kalıyoruz.</p>
        </div>
        <a href="faaliyetler/spor-etkinlikleri.php" class="btn-link" id="act-btn-spor">Detayları Gör
          <span>&rarr;</span></a>
      </div>
    </div>
    <div class="section-actions" data-animate>
      <a href="faaliyetler.php" class="btn btn-primary" id="btn-view-all-activities-bottom">Tüm Faaliyetleri
        Listele</a>
    </div>
  </section>

  <!-- Upcoming Events Section -->
  <section class="section" id="upcoming">
    <div class="section-header">
      <span class="section-tag" data-animate>Dinamik Takvim</span>
      <h2 class="section-title" data-animate>Yaklaşan Etkinliklerimiz</h2>
      <p class="section-desc" data-animate>Yakın zamanda gerçekleşecek eğitim, söyleşi ve etkinliklerimize katılarak
        yerinizi ayırtın.</p>
    </div>

    <div class="plans-timeline">
      <!-- Item 1 -->
      <div class="timeline-item" data-animate>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="upcoming-header">
            <span class="badge-target badge-general">Herkese Açık</span>
            <span class="timeline-tag">15 Haziran 2026</span>
          </div>
          <h3>Yazılım Geliştirme Kampı</h3>
          <ul class="upcoming-details-list">
            <li>📍 <strong>Yer:</strong> Bilgisayar Laboratuvarı</li>
            <li>🗣️ <strong>Konuşmacı:</strong> Mustafa Çelik (Yazılım Eğitmeni)</li>
          </ul>
          <div class="upcoming-footer">
            <a href="faaliyetler/yazilim-atolyesi.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet
              Detayı</a>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="timeline-item" data-animate>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="upcoming-header">
            <span class="badge-target badge-general">Herkese Açık</span>
            <span class="timeline-tag">19 Haziran 2026</span>
          </div>
          <h3>Derin Uzay ve Gezegen Gözlemi</h3>
          <ul class="upcoming-details-list">
            <li>📍 <strong>Yer:</strong> Cami Teras Gözlem Noktası</li>
            <li>🗣️ <strong>Konuşmacı:</strong> Prof. Dr. Selim Aksoy (Gökbilimci)</li>
          </ul>
          <div class="upcoming-footer">
            <a href="faaliyetler/astronomi-gozlemleri.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet
              Detayı</a>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="timeline-item" data-animate>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="upcoming-header">
            <span class="badge-target badge-women">Kadınlara Özel</span>
            <span class="timeline-tag">22 Haziran 2026</span>
          </div>
          <h3>Genç Kadınlar Edebiyat Buluşması</h3>
          <ul class="upcoming-details-list">
            <li>📍 <strong>Yer:</strong> Ali Kuşçu Kitaplığı</li>
            <li>🗣️ <strong>Konuşmacı:</strong> Ayşe Şahin (Eğitimci)</li>
          </ul>
          <div class="upcoming-footer">
            <a href="faaliyetler/kitap-tahlilleri.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet
              Detayı</a>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="timeline-item" data-animate>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="upcoming-header">
            <span class="badge-target badge-men">Erkeklere Özel</span>
            <span class="timeline-tag">26 Haziran 2026</span>
          </div>
          <h3>Gençlik ve Geleceğin İnşası</h3>
          <ul class="upcoming-details-list">
            <li>📍 <strong>Yer:</strong> Cami Konferans Salonu</li>
            <li>🗣️ <strong>Konuşmacı:</strong> Hasan Demir (Koordinatör)</li>
          </ul>
          <div class="upcoming-footer">
            <a href="faaliyetler/genclik-sohbetleri.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet
              Detayı</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section-actions" data-animate>
      <a href="etkinlikler.php" class="btn btn-primary" id="btn-view-all-upcoming-bottom">Tüm Etkinlikleri Gör</a>
    </div>
  </section>

  <!-- Contributors Section -->
  <section class="section" id="contributors" style="background: rgba(255,255,255,0.01);">
    <div class="section-header">
      <span class="section-tag" data-animate>Birlikte Güçlüyüz</span>
      <h2 class="section-title" data-animate>Katkıda Bulunanlar</h2>
      <p class="section-desc" data-animate>Camimizin gençlik vizyonunu destekleyen, emekleriyle değer katan değerli
        büyüklerimiz ve eğitmenlerimiz.</p>
    </div>

    <div class="team-grid" id="contributors-grid-main" data-json-path="katkida_bulunanlar.json">
      <!-- Loaded dynamically via script.js -->
    </div>

    <div class="section-actions" data-animate>
      <a href="katkida-bulunanlar.php" class="btn btn-secondary" id="btn-view-all-contributors">Tüm Destekçileri
        Gör</a>
    </div>
  </section>
<?php
include 'includes/footer.php';
?>
