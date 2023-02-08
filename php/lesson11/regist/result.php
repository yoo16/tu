<?php
require_once "../lib/functions.php";

init();
// checkPostRequest();

// セッションがあれば削除
if (isset($_SESSION['member'])) {
    unset($_SESSION['member']);
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include "../components/head.php" ?>

<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">会員登録完了</h2>
        <p>
            会員登録が完了しました。
        </p>
        <div class="d-flex mt-3">
            <a href="./input.php" class="btn btn-outline-primary w-50">戻る</a>
        </div>
    </main>
</body>

</html>