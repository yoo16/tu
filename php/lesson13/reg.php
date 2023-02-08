<?php
$regs = [
    [
        'subject' => '半角数字のみ',
        'pattern' => '/^\d+$/',
        'value' => '20220301',
    ],
    [
        'subject' => '半角数字のみ',
        'pattern' => '/^\d+$/',
        'value' => '2022-03-01',
    ],
    [
        'subject' => '半角英数のみ',
        'pattern' => '/^\w+$/',
        'value' => '東京',
    ],
    [
        'subject' => '半角英数のみ',
        'pattern' => '/^\w+$/',
        'value' => 'Tokyo',
    ],
    [
        'subject' => '半角英数のみ',
        'pattern' => '/^\w+$/',
        'value' => 'Tokyo_03',
    ],
    [
        'subject' => 'ひらがなのみ',
        'pattern' => '/^[ぁ-んー]+$/u',
        'value' => '東京',
    ],
    [
        'subject' => 'ひらがなのみ',
        'pattern' => '/^[ぁ-んー]+$/u',
        'value' => 'とうきょう',
    ],
    [
        'subject' => 'ひらがなのみ',
        'pattern' => '/^[ぁ-んー]+$/u',
        'value' => 'トウキョウ',
    ],
    [
        'subject' => '年',
        'pattern' => '/^\d{4}$/',
        'value' => '2022',
    ],
    [
        'subject' => '年',
        'pattern' => '/^\d{4}$/',
        'value' => '22',
    ],
    [
        'subject' => 'OR',
        'pattern' => '/^[ABC]$/',
        'value' => 'A',
    ],
    [
        'subject' => 'OR',
        'pattern' => '/^[ABC]$/',
        'value' => 'D',
    ],
    [
        'subject' => 'OR',
        'pattern' => '/^[ABC]$/',
        'value' => 'AB',
    ],
    [
        'subject' => 'OR',
        'pattern' => '/^[ABC]+$/',
        'value' => 'AB',
    ],
    [
        'subject' => '日付',
        'pattern' => '/^\d{4}\d{2}\d{2}$/',
        'value' => '20220301',
    ],
    [
        'subject' => '日付',
        'pattern' => '/^\d{4}\d{2}\d{2}$/',
        'value' => '2022-03-01',
    ],
    [
        'subject' => '日付',
        'pattern' => '/^\d{4}[-\/]\d{2}[-\/]\d{2}$/',
        'value' => '2022-03-01',
    ],
    [
        'subject' => '日付',
        'pattern' => '/^\d{4}[-\/]\d{2}[-\/]\d{2}$/',
        'value' => '2022/03/01',
    ],
    [
        'subject' => '日付',
        'pattern' => '/^\d{4}[-\/]\d{2}[-\/]\d{2}$/',
        'value' => '2022/3/1',
    ],

];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正規表現</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <tr>
                <th>項目</th>
                <th>パターン</th>
                <th>文字列</th>
                <th>結果</th>
            </tr>
            <?php foreach ($regs as $reg) : ?>
                <tr>
                    <td><?= $reg['subject'] ?></td>
                    <td><?= $reg['pattern'] ?></td>
                    <td><?= $reg['value'] ?></td>
                    <td><?= preg_match($reg['pattern'], $reg['value']) ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>