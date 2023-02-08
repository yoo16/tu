<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99</title>
</head>

<body>
    <h2>99</h2>
    <!-- endfor -->
    <table>
        <?php for ($x = 1; $x <= 9; $x++) : ?>
            <tr>
                <?php for ($y = 1; $y <= 9; $y++) : ?>
                    <td><?= $x * $y ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
</body>

</html>