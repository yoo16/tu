<?php
// ローン残高
$loan = 20000000;
// 支払額（月）
$pay_by_month = 80000;
// 利息（年）
$interest_rate = 0.01;
// 利息
$interest = 0;
// 支払い月数
$month = 0;

// ローン残高がある場合は繰り返し
while ($loan > 0) {
    $month++;
    // 利息の計算（月）
    $interest = ($loan * $interest_rate) / 12;
    echo $interest;
    break;
}


exit;

// ローン残高がある場合は繰り返し
// while ($loan > 0) {
//     $month++;
//     // 利息の計算（月）
//     $interest = ($loan * $interest_rate) / 12;
//     // ローン残高の計算
//     $loan -= ($pay_by_month - $interest);
// }
// echo $month / 12;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ローンシミュレーション</title>
</head>

<body>
    <h2>ローンシミュレーション</h2>
    <table>
        <tr>
            <th>月数</th>
            <th>利息</th>
            <th>ローン残高</th>
        </tr>
        <?php while ($loan > 0) : ?>
            <?php
            $month++;
            $interest = ($loan * $interest_rate) / 12;
            $loan -= ($pay_by_month - $interest);
            ?>
            <tr>
                <td><?= $month ?></td>
                <td><?= round($interest) ?></td>
                <td><?= round($loan) ?></td>
            </tr>
        <?php endwhile ?>
    </table>

    <h2>月数</h2>
    <p><?= $month ?>ヶ月</p>
</body>

</html>