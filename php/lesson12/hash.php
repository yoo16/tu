<?php 

$password = "password1234";
$hash = password_hash($password, PASSWORD_DEFAULT);

$is_success = password_verify("password1111", $hash);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ハッシュ</title>
</head>
<body>
    <h2>平文</h2>
    <p><?= $password ?></p>
    <h2>ハッシュ</h2>
    <p><?= $hash ?></p>
    <h2>成功</h2>
    <p><?= $is_success ?></p>
</body>
</html>