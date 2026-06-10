<?php
$base_path = '';
$page_title = 'Etkinliklerimiz | Ali Kuşçu Camii Gençlik Merkezi';
$page_desc = 'Camimiz bünyesinde düzenlenen tek seferlik seminerler, paneller ve özel gençlik buluşmaları.';

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/disclaimer.php';
?>
  <!-- Page Header -->
  <section class="section" style="padding-top: 160px; padding-bottom: 40px;">
    <div class="section-header">
      <span class="section-tag">Özel Buluşmalar</span>
      <h1 class="section-title">Etkinliklerimiz</h1>
      <p class="section-desc">Camimiz bünyesinde düzenlenen tek seferlik seminerler, paneller ve özel gençlik buluşmaları.</p>
    </div>
  </section>

  <!-- Events Filter Tabs & Grid -->
  <section class="section" style="padding-top: 0;">
    <div class="tab-container">
      <button class="tab-btn active" data-tab="upcoming-events">Yaklaşan Etkinlikler</button>
      <button class="tab-btn" data-tab="past-events">Geçmiş Etkinlikler</button>
    </div>

    <!-- Upcoming Events Tab Content -->
    <div id="upcoming-events" class="tab-content active">
      <div class="plans-timeline">
        <!-- Event 1 -->
        <div class="timeline-item">
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
              <a href="faaliyetler/yazilim-atolyesi.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet Detayı</a>
            </div>
          </div>
        </div>

        <!-- Event 2 -->
        <div class="timeline-item">
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
              <a href="faaliyetler/astronomi-gozlemleri.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet Detayı</a>
            </div>
          </div>
        </div>

        <!-- Event 3 -->
        <div class="timeline-item">
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
              <a href="faaliyetler/kitap-tahlilleri.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet Detayı</a>
            </div>
          </div>
        </div>

        <!-- Event 4 -->
        <div class="timeline-item">
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
              <a href="faaliyetler/genclik-sohbetleri.php" class="btn btn-secondary btn-upcoming-detail">Faaliyet Detayı</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Past Events Tab Content -->
    <div id="past-events" class="tab-content">
      <div class="plans-timeline">
        <!-- Past Event 1 -->
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="upcoming-header">
              <span class="badge-target badge-general" style="background: rgba(156, 163, 175, 0.15); color: #9ca3af; border-color: rgba(156, 163, 175, 0.3);">Tamamlandı</span>
              <span class="timeline-tag" style="color: #9ca3af;">10 Mayıs 2026</span>
            </div>
            <h3>Ali Kuşçu Anma Günü Semineri</h3>
            <ul class="upcoming-details-list">
              <li>📍 <strong>Yer:</strong> Konferans Salonu</li>
              <li>🗣️ <strong>Konuşmacı:</strong> Prof. Dr. Selim Aksoy (Gökbilimci)</li>
            </ul>
            <div class="upcoming-footer">
              <span style="color: var(--text-muted); font-size: 0.9rem; font-weight: 500;">Etkinlik Sona Erdi</span>
            </div>
          </div>
        </div>

        <!-- Past Event 2 -->
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="upcoming-header">
              <span class="badge-target badge-general" style="background: rgba(156, 163, 175, 0.15); color: #9ca3af; border-color: rgba(156, 163, 175, 0.3);">Tamamlandı</span>
              <span class="timeline-tag" style="color: #9ca3af;">24 Mart 2026</span>
            </div>
            <h3>Gençlik İftar Buluşması</h3>
            <ul class="upcoming-details-list">
              <li>📍 <strong>Yer:</strong> Cami Avlusu</li>
              <li>🗣️ <strong>Konuşmacı:</strong> Hasan Demir (Gençlik Koordinatörü)</li>
            </ul>
            <div class="upcoming-footer">
              <span style="color: var(--text-muted); font-size: 0.9rem; font-weight: 500;">Etkinlik Sona Erdi</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="text-align: center; margin-top: 60px;">
      <a href="index.php" class="btn btn-secondary">&larr; Ana Sayfaya Dön</a>
    </div>
  </section>
<?php
include 'includes/footer.php';
?>
