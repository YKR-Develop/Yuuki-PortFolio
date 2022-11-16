/*===================================================
 slide.js
 swiperプラグインのスライド設定
================================================== */
/* --------------------------------------------------
  Aboutページ [制作・開発概要]自動スライド
-------------------------------------------------- */
window.addEventListener("DOMContentLoaded", () => {
  const infiniteSlider = new Swiper(".loop-swiper", {
    loop: true,
    loopedSlides: 5,
    slidesPerView: "auto",
    speed: 5000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
  });
});

/* --------------------------------------------------
  Aboutページ Udemy受講講座スライド
-------------------------------------------------- */
const swiper = new Swiper('.card-slide', {
  slidesPerView: 1.5,
  loop: false,

  // スライドのページネーション
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },

  // ナビゲーションボタン
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // ブレイクポイント
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 16,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 24,
    },
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 48,
    }
  }
})

