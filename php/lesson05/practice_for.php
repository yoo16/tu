<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--ランダムな白黒 5 x 5 -->
    <?php
    $max = 5;
    for ($i = 0; $i < $max; $i++) {
        for ($j = 0; $j < $max; $j++) {
            // ランダムな整数(0 か 1)
            $random_index = random_int(0, 1);
            if ($random_index == 0) {
                echo "○";
            } else {
                echo "●";
            }
        }
        echo "<br>";
    }
    ?>
</body>

</html>