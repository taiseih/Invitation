
function actionToggle01() {
  var reserve__label01 = document.getElementById("reserve__label01");
  reserve__label01.classList.add('reserve__label-active');
}

function actionToggle02() {
  var reserve__label02 = document.getElementById("reserve__label02");
  reserve__label02.classList.add('reserve__label-active');
  const reserve = document.getElementById("add");
  reserve.style.display = "none"; 
}

function actionIf01() {
  if (reserve__label02.classList.contains('reserve__label-active')) {
    reserve__label02.classList.remove('reserve__label-active');
    const reserve = document.getElementById("add");
    reserve.style.display = "inline-block";
  }else{
    ;
  }; 
}

function actionIf02() {
  if (reserve__label01.classList.contains('reserve__label-active')) {
    reserve__label01.classList.remove('reserve__label-active');
  }else{
    ;
  }; 
}




// カウントダウン
let countdown = setInterval(function(){
  const now = new Date()  //今の日時
  const target = new Date("2023/4/1 00:00:00") //予定日を取得
  const remainTime = target - now  //差分を取る（ミリ秒で返ってくる

  //指定の日時を過ぎていたら処理をしない
  if(remainTime < 0) return false 

  //差分の日・時・分・秒を取得
  const difDay  = Math.floor(remainTime / 1000 / 60 / 60 / 24)
  const difHour = Math.floor(remainTime / 1000 / 60 / 60 ) % 24
  const difMin  = Math.floor(remainTime / 1000 / 60) % 60
  const difSec  = Math.floor(remainTime / 1000) % 60

  //残りの日時を上書き
  document.getElementById("p-days").textContent  = difDay
  document.getElementById("p-hours").textContent = difHour
  document.getElementById("minutes").textContent  = difMin
  document.getElementById("seconds").textContent  = difSec

  //指定の日時になればカウントを止める
  if(remainTime < 0) clearInterval(countdown)

}, 1000)  



// フォーム追加メソッド
let count = 0;
function actionClone() {
    count++;
    const template = document.getElementById("form-template");
    const new_form = template.content.cloneNode(true);
    const parent = document.getElementById("test");
    parent.appendChild(new_form);
    if(count === 3){
      const reserve = document.getElementById("add");
      reserve.style.display = "none";
      const message = document.createElement("p");
      const message2 = document.createElement("p");
      const form = document.getElementById('p-reserve__inner');
      message.innerHTML = "お連れ様は３人まで追加可能です。";
      message2.innerHTML = "４名以上追加する場合は送信後改めて回答をお願いいたします。";
      form.appendChild(message);
      form.appendChild(message2);      
      
  }
}

// deleteメソッド

function actionDelete() {
  if (count > 0) {
    const parent = document.getElementById("test");
    const lastForm = parent.lastElementChild;
    parent.removeChild(lastForm);
    count--;
    if (count < 3) {
        const reserve = document.getElementById("add");
        reserve.style.display = "inline-block";
        const message = document.getElementById("p-reserve__inner");
        const message1 = message.querySelector("p:first-child");
        const message2 = message.querySelector("p:last-child");
        message.removeChild(message1);
        message.removeChild(message2);
    }
}}

// 画像切り替え

var ldateObj = new Date();
var currentTime = ldateObj.getHours();
var lfileName = "";

  if (0 <= currentTime && currentTime < 5) {
    lfileName = 'invitation/assets/stylesheets/images/common/lateNight.jpg';
    color = "white";
  } else if (5 <= currentTime && currentTime < 12) {
    lfileName = 'invitation/assets/stylesheets/images/common/morning.jpg';
    color = "#333";
  } else if (12 <= currentTime && currentTime < 18) {
    lfileName = 'invitation/assets/stylesheets/images/common/dayTime.jpg';
    color = "white";
  } else {
    lfileName = 'invitation/assets/stylesheets/images/common/night.jpg';
    color = "white";
  }

  document.getElementById("p-countdown").style.backgroundImage = "url('../" + lfileName + "')";
  document.getElementById("p-countdown").style.color = color;


