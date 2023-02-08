<?php
require_once "../lib/functions.php";

init();

if (empty($_SESSION['auth_user'])) {
    header('Location: ../login/');
    exit;
} else {
    $user = $_SESSION['auth_user'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include "../components/head.php" ?>

<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">ユーザーホーム</h2>
        <p>
            <?= $user['name'] ?>さん、ようこそ！
            <a href="logout.php">ログアウト</a>
        </p>
    </main>
</body>

</html>