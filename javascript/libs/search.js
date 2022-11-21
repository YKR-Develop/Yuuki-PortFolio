/*===================================================
 search.js
 works制作作品 絞り込み検索の実装
================================================== */
function multi_filter(h, t, s, r = '')
{
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



