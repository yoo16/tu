<?php 
// 曜日
// $weekday = "水";
$week_index = 1;
// 今日の曜日のインデックス
// $week_index = date("w");
// 回収
$garbage = "";
// 曜日判別
switch ($week_index) {
    case 1:
    case 3:
        $garbage = "燃えるゴミ";
        break;
    case 5:
        $garbage = "燃えないゴミ";
        break;
    
    default:
        $garbage = "回収なし";
        break;
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
   <h2>曜日</h2> 
   <p><?= $week_index ?></p>
   <h2>ゴミの回収</h2> 
   <p><?= $garbage ?></p>
</body>
</html>