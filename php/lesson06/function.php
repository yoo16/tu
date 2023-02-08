<?php
// 関数の定義
function greet()
{
    echo "こんにちは";
}

// 関数の実行
// greet();
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
    <p><?= greet() ?></p>
</body>
</html>