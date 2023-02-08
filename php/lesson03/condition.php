<?php
// 価格
$price = 300;
// 所持金
$money = 1000;
// メッセージ
$message = "";
// メンテナンス中
$is_maintenance = false;

// 会員フラグ
$is_member = false;
// セール中フラグ
$is_sale = false;

if ($is_maintenance) {
    $message = "メンテナンス中です。";
} else {
    if ($price <= $money) {
        $message = "お買い上げありがとうございます。";
    } else {
        $message = "残金が不足しています。";
    }
}

if ($is_member && $is_sale) {
    $message .= "会員限定セール中！";
}

if (!$is_member) {
    $message .= "会員登録受付中！";
}

// var_dump($message);
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
    <h2>所持金</h2>
    <p><?= $money ?></p>

    <h2>価格</h2>
    <p><?= $price ?></p>

    <h2>結果</h2>
    <p><?= $message ?></p>

</body>
</html>