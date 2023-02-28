<?php
// セッションを開始する
session_start();
echo $_SESSION['password'];
// ログインしていない場合は、ログインページにリダイレクトする
// if($_SESSION['password']){
//   if (!$_SESSION['password'] === 'password123') {
//     header("Location: login.php");
//     exit();
//   }
// }else{
//   header("Location: login.php");
// }



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="expires" content="604800" />
  <meta name="format-detection" content="email=no,telephone=no,address=no" />
  <title>INVITATION</title>
  <meta name="description" content="" />
  <link rel="icon" href="assets/images/common/favicon.ico" />
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="assets/stylesheets/app.css" />
</head>

<script>


</script>

<body>
  <div class="l-body">
    <header class="l-header">
      <div class="p-header">
        <div class="p-header__top">
          <div class="p-header__content">
            <img class="head-img" src="assets/stylesheets/images/common/floor.jpg" />
            <img class="head-img" src="assets/stylesheets/images/common/sante.jpg" />
            <img class="head-img" src="assets/stylesheets/images/common/dish.jpg" />
            <h1 class="p-header__title">INVITATION</h1>
          </div>
        </div>
      </div>
    </header>
    <div class="l-menu">
      <div class="p-menu">
        <ul class="p-menu__content">
          <li class="p-menu__list">
            <a href="#p-message"><strong>Message</strong><em>メッセージ</em></a>
          </li>
          <li class="p-menu__list">
            <a href="#p-events"><strong>Events</strong><em>日時・会場</em></a>
          </li>
          <li class="p-menu__list">
            <a href="#p-reserve"><strong>Attendance</strong><em>ご出欠</em></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="l-message">
      <div id="p-message">
        <div class="p-message__title">
          MESSAGE
        </div>
        <p class="p-message__text">
          〜完全招待制のsecret party〜<br>最上級の出逢いを東京の街でこだわりの空間で、<br>素敵な時間をお過ごし下さい。
        </p>
      </div>
    </div>
    <div class="l-events">
      <div id="p-events">
        <h2 class="p-events__title">EVENTS</h2>
        <div class="p-description">
          <div class="p-description__detail">
            <strong>会場名</strong><br>Mace南青山<br>
            <br>
            <strong>住所</strong><br>東京都港区南青山３丁目２−７ブラック青山7F<br>
            <br>
            <strong>会費</strong><br>man ¥6,500<br>woman ¥3,000<br>※当日現金払いのみ<br>(事前クレジット可 VISA/AMEX/Diners)<br>
            <br>
            <strong>主催者連絡先</strong><br>何かご質問等ございましたら<br>お気軽にご連絡下さい。<br>
            <a href="tel:080-0000-0000">080-0000-0000</a><br>
            <br>
            <strong>アクセス</strong><br>東京メトロ銀座線 外苑前駅 「1a出口」 より徒歩5分<br>表参道駅 「A4出口」
            より徒歩7分<br>①1a出口を出て、青山通り沿いをスターバックスの方向に直進します。<br>②Francfrancを左に曲がり直進します。<br>③2分ほど進むと、右手に「ブラック青山」と書かれた黒い建物の7Fになります。
          </div>
          <div class="p-events__information--map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.691965402021!2d139.71778503998402!3d35.66766779999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c9dea591961%3A0xf4f34b74f0429c42!2z44CSMTA3LTAwNjIg5p2x5Lqs6YO95riv5Yy65Y2X6Z2S5bGx77yT5LiB55uu77yS4oiS77yXIOODluODqeODg-OCr-mdkuWxsSA3Zg!5e0!3m2!1sja!2sjp!4v1667228773090!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- <div class="p-events__information--wrap">
            <p class="p-events__information--link">
              <a href="https://goo.gl/maps/ZP7u31P2DV5TRRjc8" target="_blank">GoogleMapで見る</a>
            </p>
            </div> -->

        </div>
      </div>
    </div>
    <div class="l-countdown">
      <div id="p-countdown">
        <h2 class="p-countdown__title">COUNTDOWN</h2>

        <p class="p-countdown__date">to 2023.4.1 00:00</p>
        <ul class="p-countdown__wrap">
          <li class="p-countdown__days">
            <p class="p-number" id="p-days"></p>
            <p class="p-dhms">DAYS</p>
          </li>
          <li class="p-countdown__hours">
            <p class="p-number" id="p-hours"></p>
            <p class="p-dhms">HOURS</p>
          </li>
          <li class="p-countdown__minutes">
            <p class="p-number" id="minutes"></p>
            <p class="p-dhms">MINUTES</p>
          </li>
          <li class="p-countdown__seconds">
            <p class="p-number" id="seconds"></p>
            <p class="p-dhms">SECONDS</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="l-reserve">
      <div id="p-reserve">
        <h2 class="p-reserve__title">Attendance</h2>
        <p class="p-reserve__text">
          当パーティでは
          【空間】 【時間】 【出会い】<br>
          を最大限に楽しんで頂くべく<br>
          当日は様々な催し物をご用意させて頂き<br>
          ご参加された皆様に非日常をご提供させて頂きます。
          <br><span class="reserve-text-span">どうぞお気軽にお問い合わせ下さいませ。</span>
        </p>
        <div id="form">
          <form action="complete.php" method="POST" class="p-reserve__form">
            <!-- formエリア -->


            <div id="test">
              <div class="form" id="add_form_0">
                <div class="p-reserve__select">

                  <label id="reserve__label01" class="p-reserve__attend" for="attendance activeOn">
                    <span>出席</span>
                    <input class="p-reserve__select--btn" type="radio" name="attendance" value="出席" id="attendance activeOn" onclick="actionToggle01();actionIf01()">
                  </label>

                  <label id="reserve__label02" class="p-reserve__decline" for="attendance activeOff">
                    <span>欠席</span>
                    <input class="p-reserve__select--btn" type="radio" name="attendance" value="欠席" id="attendance activeOff" onclick="actionToggle02();actionIf02()">
                  </label>
                </div>

                <div class="p-reserve__wrapp">
                  <div class="p-reserve__box">
                    <div class="p-reserve__content">
                      <div class="p-reserve__content--label">
                        <p class="p-reserve__content--title">名前</p>
                      </div>
                      <div class="p-reserve__content--wrapp">
                        <input type="text" class="p-reserve__content--inputhalf" name="first_name" placeholder="性"  />
                        <input type="text" class="p-reserve__content--inputhalf" name="second_name" placeholder="名" required="" />
                      </div>
                    </div>
                    <div class="p-reserve__content">
                      <div class="p-reserve__content--label">
                        <p class="p-reserve__content--title">読み方</p>
                      </div>
                      <div class="p-reserve__content--wrapp">
                        <input type="text" class="p-reserve__content--inputhalf" name="first_read" placeholder="せい" required="" />
                        <input type="text" class="p-reserve__content--inputhalf" name="second_read" placeholder="めい" required="" />
                      </div>
                    </div>
                    <div class="p-reserve__content">
                      <div class="p-reserve__content--label">
                        <p class="p-reserve__content--title">電話番号</p>
                      </div>
                      <input name="phone_number" type="tel" class="p-reserve__content--input" required="" />
                    </div>
                    <div class="p-reserve__content">
                      <div class="p-reserve__content--label">
                        <p class="p-reserve__content--title">メールアドレス</p>
                      </div>
                      <input name="email" type="email" class="p-reserve__content--input" />
                    </div>
                    <div class="p-reserve__content">
                      <div class="p-reserve__content--label">
                        <p class="p-reserve__content--title">職業</p>
                      </div>
                      <input name="occupation" type="text" class="p-reserve__content--input" />
                    </div>
                    <div class="p-reserve__content">
                      <div class="p-reserve__content--label">
                        <p class="p-reserve__content--title">年収</p>
                      </div>
                      <input name="income" type="number" class="p-reserve__content--input" />
                    </div>
                  </div>
                </div>

              </div>
            </div>




            <!-- 追加 -->
            <div class="p-reserve__add">
              <td><button id="add" type="button" onclick="actionClone()">お連れ様を追加する &#43;</button></td>
            </div>
            <div id="p-reserve__inner"></div>

            <input type="submit" name="submit" class="p-btn p-reserve__confirm--btn"><span></span></input>
          </form>



        </div>
      </div>
    </div>
  </div>
  </div>
  <!--end formエリア -->

  <!-- テンプレート -->
  <div id="form">
    <template id="form-template">
      <!-- 追加フォーム -->
      <div class="form" id="add_form_0">
        <div class="p-reserve__select">

          <div class="p-reserve__wrapp">
            <p class="p-reserve__attention">お連れ様の情報を入力して下さい</p>
            <div class="p-reserve__wrapp">
              <div class="p-reserve__box">
                <div class="p-reserve__content">
                  <div class="p-reserve__content--label">
                    <p class="p-reserve__content--title">名前</p>
                  </div>
                  <div class="p-reserve__content--wrapp">
                    <input name="first_name" type="text" class="p-reserve__content--inputhalf" placeholder="性" required="" />
                    <input name="second_name" type="text" class="p-reserve__content--inputhalf" placeholder="名" required="" />
                  </div>
                </div>
                <div class="p-reserve__content">
                  <div class="p-reserve__content--label">
                    <p class="p-reserve__content--title">読み方</p>
                  </div>
                  <div class="p-reserve__content--wrapp">
                    <input name="first_read" type="text" class="p-reserve__content--inputhalf" placeholder="せい" required="" />
                    <input name="second_read" type="text" class="p-reserve__content--inputhalf" placeholder="めい" required="" />
                  </div>
                </div>
                <div class="p-reserve__content">
                  <div class="p-reserve__content--label">
                    <p class="p-reserve__content--title">電話番号</p>
                  </div>
                  <input name="phone_number" type="" class="p-reserve__content--input" required="" />
                </div>
                <div class="p-reserve__content">
                  <div class="p-reserve__content--label">
                    <p class="p-reserve__content--title">メールアドレス</p>
                  </div>
                  <input name="email" type="email" class="p-reserve__content--input" />
                </div>
                <div class="p-reserve__content">
                  <div class="p-reserve__content--label">
                    <p class="p-reserve__content--title">職業</p>
                  </div>
                  <input name="occupation" type="text" class="p-reserve__content--input" />
                </div>
                <div class="p-reserve__content">
                  <div class="p-reserve__content--label">
                    <p class="p-reserve__content--title">年収</p>
                  </div>
                  <input name="income" type="number" class="p-reserve__content--input" />
                </div>
              </div>
            </div>
            <!-- 削除 -->
            <div class="p-reserve__delete">
              <td><button class="deleteBtn" id="delete" type="button" onclick="actionDelete()">&#10005; 削除する</button></td>
            </div>
          </div>
        </div>
      </div>
    </template>
  </div>
  <!-- エンドテンプレート -->
  <script src="./assets/script/rsvp.js"></script>
</body>