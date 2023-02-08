<?php 
// ファイルパス
$file_path = "../data/information.txt";

// ファイルがなければ終了
if (!file_exists($file_path)) return;

// ファイルを開く（読み込み専用）
$file = fopen($file_path, "r");

// データ読み込み
$data = fgets($file);

// ファイルを閉じる
fclose($file);
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
    <h2>お知らせ</h2>
    <dl>
        <dd><?= $data ?></dd>
    </dl>
</body>
</html>