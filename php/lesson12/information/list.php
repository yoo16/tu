<?php

// お知らせ情報読み込み
function loadInformations($file_path)
{
    if (!file_exists($file_path)) return;
    $file = fopen($file_path, "r");

    $values = [];
    // 繰り返し読み込み
    while ($data = fgets($file)) {
        $values[] = $data;
    }
    fclose($file);

    return $values;
}

// ファイルパス
$file_path = "../data/information.txt";

$informations = loadInformations($file_path);

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
    <h2>データ書き込み</h2>
    <form action="add.php" method="post">
        <div>
            <label for="">お知らせ</label>
            <input type="text" name="information">
        </div>
        <button>書き込み</button>
    </form>

    <h2>お知らせ</h2>
    <dl>
        <?php if ($informations) : ?>
            <?php foreach ($informations as $information) : ?>
                <dd><?= $information ?></dd>
            <?php endforeach ?>
        <?php endif ?>
    </dl>
</body>

</html>