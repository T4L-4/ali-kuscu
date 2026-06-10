<?php
if (!isset($base_path)) {
    $base_path = '';
}
if (!isset($is_home)) {
    $is_home = false;
}
$home_prefix = $is_home ? '' : $base_path . 'index.php';
?>  <!-- Footer Section -->
  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-brand">
        <h2><span>Ali Kuşçu</span> Camii</h2>
        <p>Fenni ve manevi ilimleri bir araya getirerek yarının liderlerini yetiştiren modern bir ibadet ve ilim merkezi.</p>
      </div>
      <div class="footer-links">
        <h4>Hızlı Bağlantılar</h4>
        <ul>
          <li><a href="<?php echo $home_prefix; ?>#hero">Giriş</a></li>
          <li><a href="<?php echo $home_prefix; ?>#life">Ali Kuşçu'nun Hayatı</a></li>
          <li><a href="<?php echo $base_path; ?>faaliyetler.php">Faaliyetler</a></li>
          <li><a href="<?php echo $base_path; ?>etkinlikler.php">Etkinlikler</a></li>
        </ul>
      </div>
      <div class="footer-links">
        <h4>İletişim</h4>
        <ul>
          <li>E-posta: bilgi@alikuscurg.org</li>
          <li>Adres: İstanbul, Türkiye</li>
          <li>Hafta içi & Hafta sonu: 09:00 - 22:00</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Ali Kuşçu Camii Gençlik Merkezi. Tüm Hakları Saklıdır.</p>
      <p>Tasarım & Geliştirme: Antigravity AI</p>
    </div>
  </footer>

  <div id="google_translate_element" style="display:none;"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'tr' }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript"
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script src="<?php echo $base_path; ?>script.js"></script>
</body>

</html>
