<?php
session_start();
$data = $_POST;

var_dump($data);
$attendance = $data['attendance'];
$firstName = $data['first_name'];
$secondName = $data['second_name'];
$name = $firstName.$secondName;
$firstRead = $data['first_read'];
$secondRead = $data['second_read'];
$read = $firstRead.$secondRead;//名前を変数にまとめる
$phoneNumber = $data['phone_number'];
$email = $data['email'];
$occupation = $data['occupation'];
$income = $data['income'];


// アドミンに送るメール内容
    $toAdmin = "kakatx617@gmail.com";
    $mailTitleByAdmin = "{$name}様からのお問合せ";
    $mailContentsByAdmin = <<< EOD
        ■出欠
        {$attendance}
        ■ 名前
        {$name}
        ■ 読み方
        {$read}
        ■ 電話番号
        {$phoneNumber}
        ■ メールアドレス
        {$email}
        ■ 職業
        {$occupation}
        ■ 年収
        {$income}
    EOD;
    $fromUser = "From:".$email;
// endアドミンに送るメール内容
    $headers = array(
        'MIME-Version: 1.0',
        'Content-type: text/plain; charset=UTF-8',
        $fromUser,
        'Reply-To: ' . $email,
    );
// // 言語の指定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
    // // end言語の指定


if( mb_send_mail($toAdmin, $mailTitleByAdmin, $mailContentsByAdmin, $headers, $fromUser)) {
    $message = "<p>$toAdmin.宛に確認メールを送信いたしました。お問合せありがとうございました。</p>";

    if
    (mb_send_mail($toAdmin, $mailTitleByAdmin, $mailContentsByAdmin)) {
        // 自分に送られたら内容は破棄する
        $_SESSION = [];

        // cookieのセッション
    if(isset($_COOKIE[session_name()])) {
        $params = session_get_cookie_params();
        setcookie(session_name(),'',time() - 60000, $params["path"], $params["domain"], $params["secure"], $params['httponly']);
    }
    session_destroy();
    }else {
        $message = '<p>エラーが発生したため送れませんでした。</p>';
    }   
}else {
    $message = "<p>.$toAdmin.に確認メールを送信できませんでした。</p>";
}
// end メールを送る

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete.php</title>
</head>

<body>
    <?php 
    // if($attendance === '出席')
    // {
    //     echo "<h2>以下の内容で登録させていただきます。当日はお気をつけてお越しくださいませ。</h2>";
    // }else{
    //     echo "<h2>ご回答いただきありがとうございました。またのご出席をお待ちしております</h2>";
    // }
    echo $message;

    ?>
    <p class="formItem">■ 出欠</p>
    <?php echo $attendance; ?>

    <p class="formItem">■ 名前</p>
    <?php echo $name; ?>

    <p class="formItem">■ 読み方</p>
    <?php echo $read; ?>

    <p class="formItem">■ 電話番号</p>
    <?php echo $phoneNumber; ?>

    <p class="formItem">■ メール</p>
    <?php echo $email; ?>

    <p class="formItem">■ 職業</p>
    <?php echo $occupation; ?>

    <p class="formItem">■ 年収</p>
    <?php echo $income . 万円; ?>


    <?php
    // if($message !== "") {
    //     echo $message;
    // }
    $_SESSION = [];
    ?>
    <p><a href="index.php">TOPに戻る</a></p>

</body>

</html>