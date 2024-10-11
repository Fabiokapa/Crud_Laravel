(function() {

  /*
   * Mobile nav toggle
   -----------------------------------*/

  const mobileNavBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavBtn.classList.toggle('bi-list');
    mobileNavBtn.classList.toggle('bi-x');
  }
  
  mobileNavBtn.addEventListener('click', mobileNavToogle);

  /**
  * Habilita / Desabilita mobile 
   -----------------------------------*/
  
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

    /**
   * Scroll topo Btn
   */
  let scrollTop = document.querySelector('.scroll-topo');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);


})();


/*  PATROCINADOR
-------------------------------------*/

const itemPatrocinadores = document.querySelector(".itemSlide").cloneNode(true)
document.querySelector(".protrocinadores").appendChild(itemPatrocinadores)

/*  AOS ANIMATION 
-------------------------------------*/
