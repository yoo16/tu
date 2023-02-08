<?php 

$a = 0;
while ($a <= 10) {
    echo $a;
    $a++;
}

// 無限ループ
$a = 0;
$count = 0;
while ($a <= 10) {
    echo $a;
    $count++;
    // カウントが5になったら終了
    if ($count == 5) {
        break;
    }
}

$a = 0;
do {
    echo $a;
    $a++;
} while ($a <= 10);
?>