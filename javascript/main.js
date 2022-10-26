/*===================================================
 main.js
 js操作アニメーションの指定
================================================== */

/* --------------------------------------------------
  テキストアニメーション 1文字ずつ出現
-------------------------------------------------- */ 
// eachTextAnimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
  $('.js-text-animation').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appeartext");

    } else {
      $(this).removeClass("appeartext");
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  //spanタグを追加する
  var element = $(".js-text-animation");
  element.each(function () {
    var text = $(this).text();
    var textbox = "";
    text.split('').forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
        } else {
          var n = i / 10;
          textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
        }

      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

/* --------------------------------------------------
  検索窓動作 クリック時にモーダルで検索フォーム表示
-------------------------------------------------- */ 
//開くボタンを押した時には
$(".search-open-btn").click(function () {
  $(".search-wrap").addClass('panelactive');//#search-wrapへpanelactiveクラスを付与
$('#search-text').focus();//テキスト入力のinputにフォーカス
});

//閉じるボタンを押した時には
$(".search-close-btn").click(function () {
  $(".search-wrap").removeClass('panelactive');//#search-wrapからpanelactiveクラスを除去
});

/* --------------------------------------------------
  .header-fixed ヘッダー固定表示
-------------------------------------------------- */ 
let _window = $(window),
    _header = $('.is-top-header'),
    headerChange = $('.is-fixed-header'),
    heroBottom;
    
    _window.on('scroll', function() {
      heroBottom = $('.is-hero-img').height();
      if(_window.scrollTop() > heroBottom) {
        headerChange.addClass('is-show');
      }
      else {
        headerChange.removeClass('is-show');
      }
    });
_window.trigger('scroll');

