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
    let elemPos = $(this).offset().top - 50;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
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
  let element = $(".js-text-animation");
  element.each(function () {
    let text = $(this).text();
    let textbox = "";
    text.split('').forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
        } else {
          let n = i / 10;
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
// -------------------------------------------------- */
let _window = $(window),
  _header = $('.is-top-header'),
  headerChange = $('.is-fixed-header'),
  heroBottom;

_window.on('scroll', function () {
  heroBottom = $('.is-hero-img').height();
  if (_window.scrollTop() > heroBottom) {
    headerChange.addClass('is-show');
  }
  else {
    headerChange.removeClass('is-show');
  }
});

_window.trigger('scroll');

$('.header-nav ul li.current-menu-item a, .header-nav ul li ul.sub-menu li.current-menu-item a').css('cursor', 'default').attr('href', '#');
$('.header-nav ul li.current-menu-item a, .header-nav ul li ul.sub-menu li.current-menu-item a').click(function () { return false; });
$('.header-nav ul>li').find('ul').hide();
$('.header-nav ul>li').hover(function () {
  $('ul:not(:animated)', this).slideDown(300);
},
  function () {
    $('ul', this).hide();
  });


/* --------------------------------------------------
  .header-fixed(singleページ用) ブログ用ヘッダー固定表示 
-------------------------------------------------- */
//スクロールすると上部に固定させるための設定を関数でまとめる
function FixedAnime() {
  let headerH = $('.header-single').outerHeight(true);
  let scroll = $(window).scrollTop();
  if (scroll >= headerH) {//headerの高さ以上になったら
    $('.header-single').addClass('fixed');//fixedというクラス名を付与
  } else {//それ以外は
    $('.header-single').removeClass('fixed');//fixedというクラス名を除去
  }
}

//ナビゲーションをクリックした際のスムーススクロール
$('.header-single-nav a').click(function () {
  let elmHash = $(this).attr('href'); //hrefの内容を取得
  let pos = Math.round($(elmHash).offset().top - 120);  //headerの高さを引く
  $('body,html').animate({ scrollTop: pos }, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
  return false;//リンクの無効化
});

$(window).scroll(function () {
  FixedAnime();
});

$('.header-single-nav ul li.current-menu-item a, .header-single-nav ul li ul.sub-menu li.current-menu-item a').css('cursor', 'default').attr('href', '#');
$('.header-single-nav ul li.current-menu-item a, .header-single-nav ul li ul.sub-menu li.current-menu-item a').click(function () { return false; });
$('.header-single-nav ul>li').find('ul').hide();
$('.header-single-nav ul>li').hover(function () {
  $('ul:not(:animated)', this).slideDown(300);
},
  function () {
    $('ul', this).hide();
  });

/* --------------------------------------------------
  タブメニューリンク
-------------------------------------------------- */
function GethashID(hashIDName) {
  if (hashIDName) {
    // タブ内のaタグを全て取得
    $('.tab-nav__item').find('a').each(function () {
      let idName = $(this).attr('href');
      // リンク元の指定されたURLのハッシュタグ
      if (idName == hashIDName) {
        let parentElm = $(this).parent();
        $('.tab-nav__item').removeClass("active");
        $(parentElm).addClass("active");
        $(".tab-contents").removeClass("is-active");
        $(hashIDName).addClass("is-active");
      }
    });
  }
}

// タブをクリックしたら
jQuery('.tab-nav__link').on('click', function () {
  let idName = $(this).attr('href');
  GethashID(idName);
  return false;
});

jQuery(window).on('load', function () {
  $('.tab-nav__item:first-of-type').addClass("active");
  $('.tab-contents:first-of-type').addClass("is-active");
  let hashName = location.hash;
  GethashID(hashName);
});

//任意のタブにURLからリンクするための設定
function GethashID(hashIDName) {
  if (hashIDName) {
    //タブ設定
    $('.tab__item').find('a').each(function () { //タブ内のaタグ全てを取得
      let idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
      if (idName == hashIDName) { //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
        let parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
        $('.tab__item').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
        $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
        //表示させるエリア設定
        $(".tab__area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
        $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
      }
    });
  }
}

//タブをクリックしたら
jQuery('.tab__link').on('click', function () {
  let idName = $(this).attr('href'); //タブ内のリンク名を取得	
  GethashID(idName);//設定したタブの読み込みと
  return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
jQuery(window).on('load', function () {
  $('.tab__item:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
  $('.tab__area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
  let hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  GethashID(hashName);//設定したタブの読み込み
});

/* --------------------------------------------------
  アコーディオンメニュー
-------------------------------------------------- */

// メニューアコーディオン
var submenu = $(".accordion");
submenu.each(function () {
  var noTargetSubmenu = $(this).siblings(submenu);
  $(this).find(".menu-item > a:first-of-type").click(function () {
    $(this).next(".sub-menu").slideToggle();
    $(this).toggleClass("open");
    noTargetSubmenu.find(".sub-menu").slideUp();
    noTargetSubmenu.find(".menu-item > a:first-of-type").removeClass("open");
    return false;
  });
});
var accordion = $(".accordion");


/* --------------------------------------------------
  ナビゲーションメニュー 滞在ページの表示変更 worksページ
-------------------------------------------------- */
let navLink = document.getElementsByClassName('category-nav__link');
for (let i = 0; i < navLink.length; i++) {
  if (navLink[i].href === location.href) {
    navLink[i].classList.add('style-change');
  }
}

/*===================================================
フォーム入力時の操作
================================================== */
/* --------------------------------------------------
 同意ボタンクリック後のボタン操作 指定 
-------------------------------------------------- */
const agreeCheckbox = document.getElementById("agree");
const submitBtn = document.getElementById("submit-button");

agreeCheckbox.addEventListener("click", () => {
  if (agreeCheckbox.checked === true) {
    submitBtn.disabled = false;
  } else {
    submitBtn.disabled = true;
  }
});

/*===================================================
ページネーションの指定
================================================== */
jQuery(document).ready(function ($) {
  $('.blog-list').paginathing({
    perPage: 6,
    firstLast: false,
    prevText: 'Prev',
    nextText: 'Next',
    activeClass: 'active',
  })
});

/*===================================================
 Worksページ
 works制作作品 絞り込み検索の実装
================================================== */
function multi_filter(h, t, s, r = '') {
  //****** 変数定義 ******
  let hidden = h;
  let target = t;
  let targets = document.querySelectorAll(target);
  let selects = document.querySelectorAll(s);
  let result = document.querySelector(r);
  let result_msg = '';

  if (selects) {
    let selects_length = selects.length;
    //****** セレクトボックスごとにchangeイベントをチェック ******
    for (let i = 0; i < selects_length; i++) {
      selects[i].addEventListener('change', () => {
        let targets_length = targets.length;
        let hidden_num = 0;
        //*** targetを順番に調べる ***
        for (let ii = 0; ii < targets_length; ii++) {
          //*** 非表示クラスを一旦削除 ***
          targets[ii].classList.remove(hidden);
          //*** セレクトボックスの数だけ総当たりで検索 ***
          for (let iii = 0; iii < selects_length; iii++) {
            //*** selectのname値 / optionのvalue値 / targetの文字列を取得 ***
            let value = selects[iii].value;
            let name = selects[iii].getAttribute('name');
            let item_data = targets[ii].getAttribute('data-' + name);
            //*** value値が存在＆all以外＆一致しない / 非表示クラスなしのとき：非表示クラスを付与 ***
            if (value && value !== 'all' && value !== item_data && !targets[ii].classList.contains(hidden)) {
              targets[ii].classList.add(hidden);
              hidden_num++;
            }
          }
        }

        //****** 結果メッセージ ******
        if (result) {
          //*** 該当なし ***
          if (hidden_num === targets_length) {
            result_msg = '見つかりませんでした。';
          }
          //*** 該当あり ***
          else {
            let result_num = targets_length - hidden_num;
            result_msg = result_num + '件見つかりました。';
          }
          result.innerText = result_msg;
        }
      });
    }
  }
}
//*** 関数呼び出し ***
multi_filter('d-none', '.js-filter-item', '.js-filter', '.js-filter-msg');

/*===================================================
 slide
 swiperプラグインのスライド設定
================================================== */
/* --------------------------------------------------
  Aboutページ [制作・開発概要]自動スライド
-------------------------------------------------- */
window.addEventListener("DOMContentLoaded", () => {
  const infiniteSlider = new Swiper(".loop-swiper > .wp-block-group__inner-container", {
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

/* --------------------------------------------------
  Blogページ 最新の記事スライド
-------------------------------------------------- */
const swiperBlog = new Swiper('.article-slide', {
  slidesPerView: 1.5,
  loop: false,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

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
      slidesPerView: 1.1,
      spaceBetween: 16,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 32,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 32,
    },
    1440: {
      slidesPerView: 3.1,
      spaceBetween: 32,
    }
  }
})

/* --------------------------------------------------
  ブログページネーションの設定
-------------------------------------------------- */
!function (t, a, e) { "use strict"; var i = function (a, e) { return this.el = t(a), this.options = t.extend({}, t.fn.paginathing.defaults, e), this.startPage = 1, this.currentPage = 1, this.totalItems = this.el.children().length, this.totalPages = Math.max(Math.ceil(this.totalItems / this.options.perPage), this.options.limitPagination), this.container = t("<nav></nav>").addClass(this.options.containerClass), this.ul = t("<ul></ul>").addClass(this.options.ulClass), this.show(this.startPage), this }; i.prototype = { pagination: function (a, e) { var i = this, n = t("<li></li>"), s = t("<a></a>").attr("href", "#"), r = "number" === a ? i.options.liClass : a, o = ""; return o = "number" === a ? e : "pageNumbers" === a ? i.paginationNumbersText() : i.paginationText(a), n.addClass(r), n.data("pagination-type", a), n.data("page", e), n.append(s.html(o)), n }, paginationText: function (t) { return this.options[t + "Text"] }, paginationNumbersText: function () { return "Page " + this.currentPage + "/" + this.totalPages }, buildPagination: function () { var t, a, e = this, i = [], n = e.currentPage - 1 < e.startPage ? e.startPage : e.currentPage - 1, s = e.currentPage + 1 > e.totalPages ? e.totalPages : e.currentPage + 1, r = e.options.limitPagination; r ? e.currentPage <= Math.ceil(r / 2) + 1 ? (t = 1, a = r) : e.currentPage + Math.floor(r / 2) >= e.totalPages ? (t = e.totalPages + 1 - r, a = e.totalPages) : (t = e.currentPage - Math.ceil(r / 2), a = e.currentPage + Math.floor(r / 2)) : (t = e.startPage, a = e.totalPages), e.options.firstLast && i.push(e.pagination("first", e.startPage)), e.options.prevNext && i.push(e.pagination("prev", n)); for (var o = t; o <= a; o++)i.push(e.pagination("number", o)); return e.options.prevNext && i.push(e.pagination("next", s)), e.options.firstLast && i.push(e.pagination("last", e.totalPages)), e.options.pageNumbers && i.push(e.pagination("pageNumbers", e.currentPage)), i }, render: function (a) { var e = this, i = e.options, n = e.buildPagination(); e.ul.children().remove(), e.ul.append(n); var s = 1 === a ? 0 : (a - 1) * i.perPage, r = a * i.perPage; e.el.children().hide(), e.el.children().slice(s, r).show(), e.ul.children().each(function () { var n = t(this); switch (n.data("pagination-type")) { case "number": n.data("page") === a && n.addClass(i.activeClass); break; case "first": a === e.startPage && n.toggleClass(i.disabledClass); break; case "last": a === e.totalPages && n.toggleClass(i.disabledClass); break; case "prev": a - 1 < e.startPage && n.toggleClass(i.disabledClass); break; case "next": a + 1 > e.totalPages && n.toggleClass(i.disabledClass) } }), i.insertAfter ? e.container.append(e.ul).insertAfter(t(i.insertAfter)) : e.el.after(e.container.append(e.ul)) }, handle: function () { var a = this; a.container.find("li").each(function () { var e = t(this); e.click(function (t) { t.preventDefault(); var i = e.data("page"); a.currentPage = i, a.show(i) }) }) }, show: function (t) { this.render(t), this.handle() } }, t.fn.paginathing = function (t) { return this.each(function () { return new i(this, t) }) }, t.fn.paginathing.defaults = { perPage: 10, limitPagination: !1, prevNext: !0, firstLast: !0, prevText: "&laquo;", nextText: "&raquo;", firstText: "First", lastText: "Last", containerClass: "pagination-container", ulClass: "pagination", liClass: "page", activeClass: "active", disabledClass: "disabled", insertAfter: null, pageNumbers: !1 } }(jQuery, window, document);

jQuery(function ($) {
  // タブの切り替え（idでもclassでも可能）
  $(document).ready(function () {
    $(".tab_content").hide();//全ての.tab_contentを非表示
    $("ul.tabs li:first").addClass("active").show();//tabs内最初のliに.activeを追加
    $(".tab_content:first").show();//最初の.tab_contentを表示
    $("ul.tabs li").click(function () {
      $("ul.tabs li").removeClass("active");//.activeを外す
      $(this).addClass("active");//クリックタブに.activeを追加
      $(".tab_content").hide();//全ての.tab_contentを非表示
      var activeTab = $(this).find("a").attr("href");//アクティブタブコンテンツ
      $(activeTab).fadeIn();//アクティブタブコンテンツをフェードイン
      return false;
    });
  });
})


/* --------------------------------------------------
  タブメニューリンク
-------------------------------------------------- */ 
function GethashID(hashIDName) {
  if(hashIDName) {
    // タブ内のaタグを全て取得
    $('.tab-nav__item').find('a').each(function() {
      let idName = $(this).attr('href');
      // リンク元の指定されたURLのハッシュタグ
      if(idName == hashIDName) {
        let parentElm = $(this).parent();
        $('.tab-nav__item').removeClass("active");
        $(parentElm).addClass("active");
        $(".tab-contents").removeClass("is-active");
        $(hashIDName).addClass("is-active");
      }
    });
  }
}

// タブをクリックしたら
$('.tab-nav__link').on('click', function() {
  let idName = $(this).attr('href');
  GethashID(idName);
  return false;
});

$(window).on('load', function() {
  $('.tab-nav__item:first-of-type').addClass("active");
  $('.tab-contents:first-of-type').addClass("is-active");
  let hashName = location.hash;
  GethashID(hashName);
});

//任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
	if(hashIDName){
		//タブ設定
		$('.tab__item').find('a').each(function() { //タブ内のaタグ全てを取得
			let idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
			if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
				let parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
				$('.tab__item').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
				$(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
				//表示させるエリア設定
				$(".tab__area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
				$(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
			}
		});
	}
}

//タブをクリックしたら
$('.tab__link').on('click', function() {
	let idName = $(this).attr('href'); //タブ内のリンク名を取得	
	GethashID (idName);//設定したタブの読み込みと
	return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab__item:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.tab__area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
	let hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
	GethashID (hashName);//設定したタブの読み込み
});