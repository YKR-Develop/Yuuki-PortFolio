/*===================================================
 tab-pagination.js
 タブ内ページネーション 指定
================================================== */
$(document).ready(function() {
  $("#tab").tabpager( {
    items:4,
    contents: 'works-list',
    previous: '< Prev',
    next: 'Next >',
    position: 'top',
  })
})