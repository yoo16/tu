<?php
// 連想配列
$drink = [
    "id" => 1,
    "name" => "コーヒー",
    "price" => 150,
    "stock" => 5,
    "is_sale" => true,
];

$drink["name"] = "紅茶";

// 多次元配列
$numbers = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
];
// var_dump($numbers);

// 多次元配列の列指定
$column_index = 4;
$column_numbers = array_column($numbers, $column_index);
// var_dump($column_numbers);
// 列の合計
$column_sum = array_sum($column_numbers);

// 変数定義
$id = 1;
$email = "tokyo@test.com";
$name = "東京　太郎";

$user = compact("id", "email", "name");
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
    <h2>ドリンク</h2>
    <p>
        <?= $drink["name"] ?>
    </p>
    <h2>数字</h2>
    <p>
        <?= $numbers[1][2] ?>
    </p>

    <h2>列の合計値</h2>
    <h3>インデックス</h3>
    <p><?= $column_index ?></p>
    <h3>合計値</h3>
    <p><?= $column_sum ?></p>

    <h2>ユーザー</h2>
    <h3>ID</h3>
    <p><?= $user["id"] ?></p>
    <h3>氏名</h3>
    <p><?= $user["name"] ?></p>
    <h3>Email</h3>
    <p><?= $user["email"] ?></p>
</body>

</html>