//Menu Mobile
const btnMenu = document.getElementById('js-btn-menu-mobile');
const overlayMenu = document.querySelector('.js-overlay');

function openMenuMobile() {
  document.documentElement.classList.add('menu-opened');
}

function closeMenuMobile() {
  document.documentElement.classList.remove('menu-opened');
}

btnMenu.addEventListener('click', openMenuMobile);
overlayMenu.addEventListener('click', closeMenuMobile);

// Controle de visibilidade da SECTION CASES
document.addEventListener("DOMContentLoaded", function(){

    const btnOne = document.getElementById('btn-case-one');
    const btnTwo = document.getElementById('btn-case-two');
    const btnThree = document.getElementById('btn-case-three');

    const contentOne = document.getElementById('content-case-one');
    const contentTwo = document.getElementById('content-case-two');
    const contentThree = document.getElementById('content-case-three');

    btnOne.addEventListener('click', ()=>{

        btnOne.classList.add('btn-active');
        btnTwo.classList.remove('btn-active');
        btnThree.classList.remove('btn-active');

        contentOne.classList.add('content-active');
        contentTwo.classList.remove('content-active');
        contentThree.classList.remove('content-active');

    })

    btnTwo.addEventListener('click', ()=>{

        btnOne.classList.remove('btn-active');
        btnTwo.classList.add('btn-active');
        btnThree.classList.remove('btn-active');

        contentOne.classList.remove('content-active');
        contentTwo.classList.add('content-active');
        contentThree.classList.remove('content-active');

    })

    btnThree.addEventListener('click', ()=>{

        btnOne.classList.remove('btn-active');
        btnTwo.classList.remove('btn-active');
        btnThree.classList.add('btn-active');

        contentOne.classList.remove('content-active');
        contentTwo.classList.remove('content-active');
        contentThree.classList.add('content-active');

    })
});

// Swiper (Slides)
var swiper = new Swiper(".slide-solutions", {
    slidesPerView: 3,
    spaceBetween: 32,
    pagination: {
      el: ".solutions .slide-solutions .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 16,
      },
      750: {
          slidesPerView: 2,
          spaceBetween: 32,
      },
      1200: {
          slidesPerView: 3,
          spaceBetween: 32,
      }
    }
  });

  var swiper = new Swiper(".content-case", {
    slidesPerView: 3,
    spaceBetween: 32,
    pagination: {
      el: ".cases .content-case .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 16,
      },
      750: {
          slidesPerView: 2,
          spaceBetween: 32,
      },
      1200: {
          slidesPerView: 3,
          spaceBetween: 32,
      }
    }
  });

  var swiper = new Swiper(".slide-blog", {
    slidesPerView: 3,
    spaceBetween: 32,
    loop: true,
    pagination: {
      el: ".blog .slide-blog .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 16,
      },
      750: {
          slidesPerView: 2,
          spaceBetween: 32,
      },
      1200: {
          slidesPerView: 3,
          spaceBetween: 32,
      }
    }
  });


// Transição
AOS.init({
  duration: 1000,
  easing: 'ease-in-out',
  delay: 100,
  once: true
});

