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

/* --------------------------------------------------
  アコーディオンメニュー
-------------------------------------------------- */ 
jQuery(function($) {
  // タイトルがクリックされたら
  $(".js-accordion-title").on('click', function () {
    // クリックしたjs-accordion-title以外の全てのopenをとる
    $(".js-accordion-title").not(this).removeClass("open");
    // クリックされたjs-accordion-title以外のcontentを閉じる
    $(".js-accordion-title").not(this).next().slideUp(300);
    // thisにopenクラスを付与
    $(this).toggleClass("open");
    // thisのcontentを展開、開いていれば閉じる
    $(this).next().slideToggle(300);
  });
})



