/*===================================================
 form.js
 フォーム入力時の操作
================================================== */
/* --------------------------------------------------
 同意ボタンクリック後のボタン操作 指定 
-------------------------------------------------- */
const agreeCheckbox = document.getElementById("agree");
const submitBtn = document.getElementById("submit-button");

agreeCheckbox.addEventListener("click", () => {
  if(agreeCheckbox.checked === true) {
    submitBtn.disabled = false;
  } else {
    submitBtn.disabled = true;
  }
});
