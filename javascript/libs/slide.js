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