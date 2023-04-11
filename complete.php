<?php
session_start();
if (!$_SESSION['attendance']) {
    header('Location:index.php');
}

$attendance = $_SESSION['attendance'];
$firstName = $_SESSION['first_name'];
$secondName = $_SESSION['second_name'];
$name = $firstName . $secondName;
$firstRead = $_SESSION['first_read'];
$secondRead = $_SESSION['second_read'];
$read = $firstRead . $secondRead; //名前を変数にまとめる
$phoneNumber = $_SESSION['phone_number'];
$email = $_SESSION['email'];
$occupation = $_SESSION['occupation'];
$income = $_SESSION['income'];

$firstName_1 = $_SESSION['add_first_name_1'];
$secondName_1 = $_SESSION['add_second_name_1'];
$name_1 = $firstName_1 . $secondName_1;
$firstRead_1 = $_SESSION['add_first_read_1'];
$secondRead_1 = $_SESSION['second_read'];
$read_1 = $firstRead_1 . $secondRead_1; //名前を変数にまとめる
$phoneNumber_1 = $_SESSION['add_phone_number_1'];
$email_1 = $_SESSION['add_email_1'];
$occupation_1 = $_SESSION['add_occupation_1'];
$income_1 = $_SESSION['add_income_1'];

$firstName_2 = $_SESSION['add_first_name_2'];
$secondName_2 = $_SESSION['add_second_name_2'];
$name_2 = $firstName_2 . $secondName_2;
$firstRead_2 = $_SESSION['add_first_read_2'];
$secondRead_2 = $_SESSION['add_second_read_2'];
$read_2 = $firstRead_2 . $secondRead_2; //名前を変数にまとめる
$phoneNumber_2 = $_SESSION['add_phone_number_2'];
$email_2 = $_SESSION['add_email_2'];
$occupation_2 = $_SESSION['add_occupation_2'];
$income_2 = $_SESSION['add_income_2'];

$firstName_3 = $_SESSION['add_first_name_3'];
$secondName_3 = $_SESSION['add_second_name_3'];
$name_3 = $firstName_3 . $secondName_3;
$firstRead_3 = $_SESSION['add_first_read_3'];
$secondRead_3 = $_SESSION['add_second_read_3'];
$read_3 = $firstRead_3 . $secondRead_3; //名前を変数にまとめる
$phoneNumber_3 = $_SESSION['add_phone_number_3'];
$email_3 = $_SESSION['add_email_3'];
$occupation_3 = $_SESSION['add_occupation_3'];
$income_3 = $_SESSION['add_income_3'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete.php</title>
    <link rel="stylesheet" href="./assets/stylesheets/object/projects/_complete.css" />
</head>

<body>
    <?php
    if($attendance === '出席')
    {
        echo "<h2>当日はお気をつけてお越しくださいませ。</h2>";
    }else{
        echo "<h2>またのご出席をお待ちしております</h2>";
    }
    echo $message;

    ?>

    <table class="confirmTable">
        <h2 class="confirmTitle">代表者 様</h2>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">出欠</th>
            <td class="confirmTableTd"><?php echo $attendance; ?></td>
        </tr>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">名前</th>
            <td class="confirmTableTd"><?php echo $name; ?></td>
        </tr>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">読み方</th>
            <td class="confirmTableTd"><?php echo $read; ?></td>
        </tr>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">電話番号</th>
            <td class="confirmTableTd"><?php echo $phoneNumber; ?></td>
        </tr>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">メールアドレス</th>
            <td class="confirmTableTd"><?php echo $email; ?></td>
        </tr>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">職業</th>
            <td class="confirmTableTd"><?php echo $occupation; ?></td>
        </tr>
        <tr class="confirmTableTr">
            <th class="confirmTableHead">年収</th>
            <td class="confirmTableTd"><?php echo $income; ?></td>
        </tr>
    </table>
    <!-- 1人め -->
    <?php if ($name_1) : ?>
        <table class="add-confirmTable">
            <h2 class="add-confirmTitle">1人目のお連れ 様</h2>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">名前</th>
                <td class="add-confirmTableTd"><?php echo $name_1; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">読み方</th>
                <td class="add-confirmTableTd"><?php echo $read_1; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">電話番号</th>
                <td class="add-confirmTableTd"><?php echo $phoneNumber_1; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">メールアドレス</th>
                <td class="add-confirmTableTd"><?php echo $email_1; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">職業</th>
                <td class="add-confirmTableTd"><?php echo $occupation_1; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">年収</th>
                <td class="add-confirmTableTd"><?php echo $income_1; ?></td>
            </tr>
        </table>
    <?php endif ?>
    <!-- ２人め -->
    <?php if ($name_2) : ?>
        <table class="add-confirmTable">
            <h2 class="add-confirmTitle">2人目のお連れ 様</h2>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">名前</th>
                <td class="add-confirmTableTd"><?php echo $name_2; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">読み方</th>
                <td class="add-confirmTableTd"><?php echo $read_2; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">電話番号</th>
                <td class="add-confirmTableTd"><?php echo $phoneNumber_2; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">メールアドレス</th>
                <td class="add-confirmTableTd"><?php echo $email_2; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">職業</th>
                <td class="add-confirmTableTd"><?php echo $occupation_2; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">年収</th>
                <td class="add-confirmTableTd"><?php echo $income_2; ?></td>
            </tr>
        </table>
    <?php endif ?>

    <!-- ３人め -->
    <?php if ($name_3) : ?>

        <table class="add-confirmTable">
            <h2 class="add-confirmTitle">3人目のお連れ 様</h2>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">名前</th>
                <td class="add-confirmTableTd"><?php echo $name_3; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">読み方</th>
                <td class="add-confirmTableTd"><?php echo $read_3; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">電話番号</th>
                <td class="add-confirmTableTd"><?php echo $phoneNumber_3; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">メールアドレス</th>
                <td class="add-confirmTableTd"><?php echo $email_3; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">職業</th>
                <td class="add-confirmTableTd"><?php echo $occupation_3; ?></td>
            </tr>
            <tr class="add-confirmTableTr">
                <th class="add-confirmTableHead">年収</th>
                <td class="add-confirmTableTd"><?php echo $income_3; ?></td>
            </tr>
        </table>
    <?php endif ?>

    <?php
    // if($message !== "") {
    //     echo $message;
    // }
    $_SESSION = [];
    ?>
    <p><a href="index.php">TOPに戻る</a></p>

</body>

</html>