<?php
// 現在の数字
$number = 1;
// 最大値
$max = 100;
// 答えの配列
$numbers = [];
while ($number <= $max) {
    if ($number % 17 == 0) {
        // 配列に答えを追加
        $numbers[] = $number;
        // 配列の個数が3だったらループ終了
        if (count($numbers) == 3) break;
    }
    $number++;
}
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
    <?php for ($i = 0; $i < count($numbers); $i++): ?>    
    <p><?= $numbers[$i] ?></p>
    <?php endfor ?>
</body>
</html>
