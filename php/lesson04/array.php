<?php 

$drinks = ["コーヒー", "紅茶", "ほうじ茶"];
$drinks[1] = "ウーロン茶";
// 新規データ追加
$drinks[] = "炭酸水";
// var_dump($drinks);

// 商品の個数
$count = 0;
// 配列だったら処理
if (is_array($drinks)) {
    $count = count($drinks);
}

// 商品検索
$search_item = "オレンジジュース";

// 配列の結合
$cities_1 = ["東京", "神奈川", "千葉"];
$cities_2 = ["大阪", "京都", "兵庫"];
$cities = array_merge($cities_1, $cities_2);

// かな
$words = ["あ", "い", "う", "え", "お"];
// 降順に並び替え
rsort($words);

// ２番目の商品を削除
unset($drinks[1]);
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
    <h2>商品名</h2>   
    <p><?= $drinks[3] ?></p>

    <h2>商品の個数</h2>
    <p><?= $count ?>個</p>

    <h2>商品検索</h2>
    <?php if (in_array($search_item, $drinks)): ?>
    <p><?= "{$search_item}が見つかりました。" ?></p>
    <?php endif ?>

    <h2>都道府県</h2>
    <p>
        <?php var_dump($cities); ?>
    </p>

    <h2>かな</h2>
    <p>
        <?php var_dump($words); ?>
    </p>

    <h2>商品データ</h2>
    <p>
        <?php var_dump($drinks); ?>
    </p>
</body>
</html>