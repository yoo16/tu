<?php 

$weekdays = ["日", "月", "火", "水", "木", "金", "土"];
$index = 3;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>曜日</title>
</head>
<body>
    <h2>曜日</h2>   
    <p><?= $index ?></p>
    <p><?= $weekdays[$index] ?>曜日</p>
</body>
</html>