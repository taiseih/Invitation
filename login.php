<?php
// パスワードを設定する
$password = "password123";

// フォームが送信された場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //post通信かどうかの比較
    $user_password = $_POST['password'];

    if ($user_password === $password) { //あらかじめ決めたパスワードと比較
        session_start();
        $_SESSION['password'] = $password;
        header("Location: index.php");
        exit();
    } else {
        $error_message = "パスワードが間違っています。";
    }
}
?>

<!-- ログインフォームを表示する -->


<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="./assets/stylesheets/object/projects/login.css" />

</head>

<body>
    <div id="login">
        <form name='form-login'>
            <span class="fontawesome-lock"></span>
            <input type="password" id"pass" placeholder="Password">

            <button type="submit">ログイン</button>

        </form>
    </div>
</body>


<?php
// エラーメッセージがある場合には表示する
if (isset($error_message)) {
    echo "<p>{$error_message}</p>";
}
?>