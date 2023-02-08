<?php
//文字を表示
#文字を表示
/**
 * 文字を表示
 * 複数行のコメントができます。
 */
// echo "Hello, PHP!!";

// ドリンクの変数
$drink1 = "コーヒー";
$drink2 = "紅茶";
$drink3 = "ほうじ茶";

// 値段の変数
$price1 = 350;
$price2 = 450;
$price3 = 300;

// 税率
const TAX_RATE = 0.1;

// define("TAX_RATE", 0.1)

// 文字の連結
$user_name = "東京　太郎";
$welcome_message = $user_name . "さん、いらっしゃい！";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p><?= $welcome_message ?></p>
    </div>
    <h2>商品リスト</h2>
    <ul>
        <li><?= $drink1; ?>: <?= $price1; ?>円</li>
        <li><?= $drink2; ?>: <?= $price2; ?>円</li>
        <li><?= $drink3; ?>: <?= $price3; ?>円</li>
    </ul>
    
</body>
</html>