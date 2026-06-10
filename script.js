document.addEventListener('DOMContentLoaded', () => {
  // Mobile Menu Toggle
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      navLinks.classList.toggle('active');
    });

    // Close menu when clicking link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        navLinks.classList.remove('active');
      });
    });
  }

  // Header Scroll Effect
  const header = document.querySelector('.main-header');
  const handleScroll = () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };
  window.addEventListener('scroll', handleScroll);
  handleScroll(); // Trigger initially

  // Scroll Animations (Intersection Observer)
  const animateElements = document.querySelectorAll('[data-animate]');
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.15
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        obs.unobserve(entry.target); // Animating once is cleaner
      }
    });
  }, observerOptions);

  animateElements.forEach(el => {
    observer.observe(el);
  });

  // Active Link State on Scroll
  const sections = document.querySelectorAll('section[id]');
  const navItems = document.querySelectorAll('.nav-links a');

  window.addEventListener('scroll', () => {
    let current = '';
    const scrollPos = window.scrollY + 120; // offset for navbar height

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navItems.forEach(item => {
      item.classList.remove('active');
      const href = item.getAttribute('href');
      if (href === `#${current}` || (current === '' && href === '#hero')) {
        item.classList.add('active');
      }
    });
  });

  // Fallback Contributors Data (for local execution / file:// protocol)
  const fallbackContributors = [
    { "id": 1, "name": "Ahmet Yılmaz", "title": "Vakıf Başkanı", "initials": "AY" },
    { "id": 2, "name": "Dr. Mehmet Kaya", "title": "Bilim Danışmanı", "initials": "MK" },
    { "id": 3, "name": "Hasan Demir", "title": "Gençlik Koordinatörü", "initials": "HD" },
    { "id": 4, "name": "Mustafa Çelik", "title": "Yazılım Eğitmeni", "initials": "MÇ" },
    { "id": 5, "name": "Ayşe Şahin", "title": "Eğitim Koordinatörü", "initials": "AŞ" },
    { "id": 6, "name": "Fatma Arslan", "title": "Sosyal Faaliyetler Sorumlusu", "initials": "FA" },
    { "id": 7, "name": "Zeynep Korkmaz", "title": "Kütüphane Sorumlusu", "initials": "ZK" },
    { "id": 8, "name": "Ömer Faruk Özkan", "title": "Astronomi Kulübü Lideri", "initials": "ÖÖ" },
    { "id": 9, "name": "Fikret Yıldız", "title": "Matematik Atölyesi Sorumlusu", "initials": "FY" },
    { "id": 10, "name": "Dr. Selim Aksoy", "title": "Fen Bilimleri Danışmanı", "initials": "SA" },
    { "id": 11, "name": "Büşra Yılmaz", "title": "Medya ve İletişim Sorumlusu", "initials": "BY" },
    { "id": 12, "name": "Kerem Aslan", "title": "Spor Koordinatörü", "initials": "KA" },
    { "id": 13, "name": "Hatice Demir", "title": "Tasarım Koordinatörü", "initials": "HT" },
    { "id": 14, "name": "Abdullah Öztürk", "title": "Sosyal Medya Yöneticisi", "initials": "AÖ" }
  ];

  // Helper loader function with fallback
  function loadContributorsData(jsonPath, callback) {
    fetch(jsonPath)
      .then(response => {
        if (!response.ok) throw new Error('Could not fetch JSON');
        return response.json();
      })
      .then(data => callback(data))
      .catch(error => {
        console.warn('Fetch blocked by CORS/file policy, using fallback array.', error);
        callback(fallbackContributors);
      });
  }

  // Dynamic Contributors Loader (for index.html)
  const contributorsContainer = document.getElementById('contributors-grid-main');
  if (contributorsContainer) {
    const jsonPath = contributorsContainer.getAttribute('data-json-path') || 'katkida_bulunanlar.json';
    loadContributorsData(jsonPath, (data) => {
      const first8 = data.slice(0, 8);
      contributorsContainer.innerHTML = first8.map(person => `
        <div class="team-card" data-animate style="opacity: 1; transform: translateY(0);">
          <div class="team-avatar-placeholder">${person.initials}</div>
          <h3>${person.name}</h3>
          <p>${person.title}</p>
        </div>
      `).join('');
    });
  }

  // Contributors Page Search & Render
  const allContributorsContainer = document.getElementById('contributors-grid-all');
  const searchInput = document.getElementById('contributor-search');
  if (allContributorsContainer) {
    let allContributors = [];
    const jsonPath = allContributorsContainer.getAttribute('data-json-path') || 'katkida_bulunanlar.json';
    
    loadContributorsData(jsonPath, (data) => {
      allContributors = data;
      renderContributors(allContributors);
    });
      
    function renderContributors(list) {
      if (list.length === 0) {
        allContributorsContainer.innerHTML = '<p style="grid-column: 1/-1; text-align: center; color: var(--text-muted); padding: 40px 0;">Eşleşen destekçi bulunamadı.</p>';
        return;
      }
      allContributorsContainer.innerHTML = list.map(person => `
        <div class="team-card" style="opacity: 1; transform: translateY(0);">
          <div class="team-avatar-placeholder">${person.initials}</div>
          <h3>${person.name}</h3>
          <p>${person.title}</p>
        </div>
      `).join('');
    }
    
    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase().trim();
        const filtered = allContributors.filter(person => 
          person.name.toLowerCase().includes(query) || 
          person.title.toLowerCase().includes(query)
        );
        renderContributors(filtered);
      });
    }
  }

  // Theme Toggle Logic
  const themeToggle = document.getElementById('theme-toggle');
  
  const currentTheme = localStorage.getItem('theme') || 'dark';
  if (currentTheme === 'light') {
    document.body.classList.add('light-theme');
    if (themeToggle) themeToggle.textContent = '☀️';
  } else {
    document.body.classList.remove('light-theme');
    if (themeToggle) themeToggle.textContent = '🌙';
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('light-theme');
      
      let theme = 'dark';
      if (document.body.classList.contains('light-theme')) {
        theme = 'light';
        themeToggle.textContent = '☀️';
      } else {
        themeToggle.textContent = '🌙';
      }
      localStorage.setItem('theme', theme);
    });
  }

  // Google Translate & Language Selector Logic
  const disclaimerTexts = {
    en: "Please note: This page has been translated automatically using Google Translate. Some translations may be inaccurate.",
    es: "Aviso: Esta página ha sido traducida automáticamente con Google Translate. Algunas traducciones pueden contener errores.",
    ar: "تنبيه: تم ترجمة هذه الصفحة تلقائيًا باستخدام Google Translate. قد تحتوي الترجمة على بعض الأخطاء."
  };

  const disclaimerBtnTexts = {
    en: "Got it",
    es: "Entendido",
    ar: "فهمت"
  };

  const disclaimerEl = document.getElementById('translate-disclaimer');
  const disclaimerTextEl = document.getElementById('disclaimer-text');
  const disclaimerCloseBtn = document.getElementById('disclaimer-close-btn');

  function showDisclaimer(lang) {
    if (disclaimerEl && disclaimerTextEl) {
      disclaimerTextEl.textContent = disclaimerTexts[lang] || '';
      if (disclaimerCloseBtn) {
        disclaimerCloseBtn.textContent = disclaimerBtnTexts[lang] || 'OK';
      }
      disclaimerEl.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // Block background interaction & scrolling
    }
  }

  function hideDisclaimer() {
    if (disclaimerEl) {
      disclaimerEl.style.display = 'none';
      document.body.style.overflow = ''; // Restore interaction & scrolling
    }
  }

  if (disclaimerCloseBtn) {
    disclaimerCloseBtn.addEventListener('click', () => {
      hideDisclaimer();
    });
  }

  function triggerGoogleTranslate(langCode) {
    const selectEl = document.querySelector('.goog-te-combo');
    if (selectEl) {
      selectEl.value = langCode;
      selectEl.dispatchEvent(new Event('change'));
    } else {
      setTimeout(() => triggerGoogleTranslate(langCode), 200);
    }
  }

  function setLanguage(lang) {
    const langText = document.getElementById('lang-text');
    if (langText) langText.textContent = lang.toUpperCase();
    
    localStorage.setItem('preferred-lang', lang);
    
    if (lang === 'tr') {
      // Clear Google Translate cookies
      document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
      document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + window.location.hostname + ";";
      
      const domainParts = window.location.hostname.split('.');
      if (domainParts.length > 1) {
        const domainRoot = "." + domainParts.slice(-2).join('.');
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + domainRoot + ";";
      }
      
      hideDisclaimer();
      document.documentElement.dir = 'ltr';
      document.body.dir = 'ltr';
      
      // Reload page to reset translation completely
      window.location.reload();
    } else {
      triggerGoogleTranslate(lang);
      showDisclaimer(lang);
      if (lang === 'ar') {
        document.documentElement.dir = 'rtl';
        document.body.dir = 'rtl';
      } else {
        document.documentElement.dir = 'ltr';
        document.body.dir = 'ltr';
      }
    }
  }

  // Toggle dropdown on click
  const langBtn = document.getElementById('lang-btn');
  const langDropdown = document.getElementById('lang-dropdown');
  if (langBtn && langDropdown) {
    langBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      langDropdown.classList.toggle('active');
    });
    
    document.addEventListener('click', () => {
      langDropdown.classList.remove('active');
    });
  }
  
  const langLinks = document.querySelectorAll('.lang-dropdown a');
  langLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const selectedLang = link.getAttribute('data-lang');
      setLanguage(selectedLang);
      if (langDropdown) langDropdown.classList.remove('active');
    });
  });

  // Apply saved language on load
  const savedLang = localStorage.getItem('preferred-lang') || 'tr';
  if (savedLang !== 'tr') {
    setTimeout(() => {
      setLanguage(savedLang);
    }, 1200); // Wait slightly for translate frame to load
  }

  // Countdown Timer Logic
  const timerEl = document.getElementById('event-timer');
  if (timerEl) {
    const targetDateStr = timerEl.getAttribute('data-target-date');
    const targetDate = new Date(targetDateStr).getTime();

    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    const updateTimer = () => {
      const now = new Date().getTime();
      const difference = targetDate - now;

      if (difference <= 0) {
        timerEl.innerHTML = '<div class="timer-segment" style="grid-column: 1/-1; width: 100%; text-align: center;"><span class="timer-num" style="font-size: 1.4rem; width: auto; padding: 12px 24px; border-radius: 8px;">Kayıtlar Kapandı / Etkinlik Başladı</span></div>';
        clearInterval(timerInterval);
        return;
      }

      const days = Math.floor(difference / (1000 * 60 * 60 * 24));
      const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((difference % (1000 * 60)) / 1000);

      if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
      if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
      if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
      if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
    };

    updateTimer();
    const timerInterval = setInterval(updateTimer, 1000);
  }

  // Tabs Toggle Logic for etkinlikler.php
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetTab = btn.getAttribute('data-tab');

      tabButtons.forEach(b => b.classList.remove('active'));
      tabContents.forEach(c => c.classList.remove('active'));

      btn.classList.add('active');
      const targetContent = document.getElementById(targetTab);
      if (targetContent) targetContent.classList.add('active');
    });
  });
});
