<?php
$user_name = "";
$admin_name = "";

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
    <?php
    // if ($user_name) {
    //     // echo "<p><a href=\"\">{$user_name}</a></p>";
    //     echo '<p><a href="">' . $user_name . '</a></p>';
    // }
    ?>

    <nav>
        <a href="">Home</a>
        <?php if ($admin_name) : ?>
            <a href="">Admin Page</a>
        <?php elseif ($user_name) : ?>
            <a href="">My Page</a>
        <?php else : ?>
            <a href="">Register</a>
        <?php endif ?>
    </nav>

    <?php if ($user_name) : ?>
        <p><a href=""><?= $user_name ?></a></p>
    <?php endif ?>
</body>

</html>