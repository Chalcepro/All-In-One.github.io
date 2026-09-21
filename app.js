  // fancy animation
  AOS.init({
    duration: 900,
    once: true
  });


  // fancy nav
  window.addEventListener('scroll', function () {
    const nav = document.getElementById('mainNav');
    const heroHeight = document.querySelector('.hero')?.offsetHeight || 100; // fallback if .hero not defined
    if (window.scrollY > heroHeight - 100) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }
  });


//music player
