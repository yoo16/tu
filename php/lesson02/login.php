<?php
$email = "";
$password = "";
// if (!empty($_GET)) {
//     $email = $_GET["email"];
//     $password = $_GET["password"];
// }
if (!empty($_POST)) {
    $email = $_POST["email"];
    $password = $_POST["password"];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">パスワード</label>
            <input type="password" name="password">
        </div>
        <button>ログイン</button>
    </form>

    <h2>Email</h2>
    <p><?= $email ?></p>

    <h2>パスワード</h2>
    <p><?= $password ?></p>
</body>

</html>