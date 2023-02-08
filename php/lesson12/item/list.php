<?php 
$file_path = "../data/items.csv";
$items = loadItems($file_path);

function loadItems($file_path)
{
    if (!file_exists($file_path)) return;
    $file = fopen($file_path, "r");

    $rows = [];
    while ($row = fgetcsv($file)) {
        $rows[] = $row;
    }
    fclose($file);

    // キー一覧取得（１行目のデータ）
    $keys = array_shift($rows);

    // 多次元配列
    $values = [];
    foreach ($rows as $row) {
        $values[] = array_combine($keys, $row);
    }

    return $values;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品リスト</title>
</head>
<body>
   <h2>商品リスト</h2> 
   <dl>
    <?php if ($items): ?>
    <?php foreach ($items as $item): ?>
    <dt><?= $item['name'] ?></dt>
    <dd><?= $item['price'] ?>円</dd>
    <?php endforeach ?>
    <?php endif ?>
   </dl>
</body>
</html>