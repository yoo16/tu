<?php

for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo PHP_EOL;
}

// １から10まで足した合計
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
echo $sum;
echo PHP_EOL;