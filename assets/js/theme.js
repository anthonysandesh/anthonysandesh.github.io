(function () {
  var THEME_KEY = 'preferredTheme';
  var BODY = document.body;
  var TOGGLE = null;

  function applyTheme(theme) {
    if (theme === 'dark') {
      BODY.classList.remove('white-vertion');
      BODY.classList.add('dark-vertion');
      setToggleIcon('dark');
      swapLogo('dark');
    } else {
      BODY.classList.remove('dark-vertion');
      BODY.classList.add('white-vertion');
      setToggleIcon('light');
      swapLogo('light');
    }
  }

  function setToggleIcon(theme) {
    if (!TOGGLE) return;
    var icon = TOGGLE.querySelector('i');
    if (!icon) return;
    if (theme === 'dark') {
      icon.classList.remove('fa-moon-o');
      icon.classList.add('fa-sun-o');
    } else {
      icon.classList.remove('fa-sun-o');
      icon.classList.add('fa-moon-o');
    }
  }

  function swapLogo(theme) {
    var logo = document.getElementById('siteLogo');
    if (!logo) return;
    // Default to black logo for light theme, green or original for dark
    if (theme === 'dark') {
      // Prefer a light-on-dark logo if available
      logo.src = 'assets/images/logo_anthony.png';
      logo.alt = 'Anthony Kommareddy - dark logo';
    } else {
      // Light theme: use dark-on-light logo
      logo.src = 'assets/images/navlogos/logo_black.png';
      logo.alt = 'Anthony Kommareddy - light logo';
    }
  }

  function resolveInitialTheme() {
    try {
      var stored = localStorage.getItem(THEME_KEY);
      if (stored === 'light' || stored === 'dark') return stored;
    } catch (e) {}
    return 'light';
  }

  function toggleTheme() {
    var current = BODY.classList.contains('dark-vertion') ? 'dark' : 'light';
    var next = current === 'dark' ? 'light' : 'dark';
    try { localStorage.setItem(THEME_KEY, next); } catch (e) {}
    applyTheme(next);
  }

  function init() {
    TOGGLE = document.getElementById('themeToggle');
    var initial = resolveInitialTheme();
    applyTheme(initial);
    if (TOGGLE) {
      TOGGLE.addEventListener('click', function (e) {
        e.preventDefault();
        toggleTheme();
      });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

