<?php
// 現在の数字
$number = 1;
// 最大値
$max = 100;
// 個数
$count = 0;

while ($number <= $max) {
    if ($number % 17 == 0) {
        // 17で割り切れる場合
        echo $number;
        echo PHP_EOL;
        $count++;
        // 3個になったら終了
        if ($count == 3) break;
    }
    $number++;
}
