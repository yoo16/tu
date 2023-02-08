<?php
require_once "../setting.php";
require_once "../lib/functions.php";

init();

$is_save = filter_input(INPUT_COOKIE, 'login_save');
$checked = ($is_save) ? 'checked' : '';

if (isset($_SESSION['login'])) {
    // セッションがあれば復元（Emailのみ）
    $member['email'] = $_SESSION['login']['email'];
} else {
    // セッションがなければCookieから復元（チェック時のみ）
    if ($is_save) {
        $member['email'] = filter_input(INPUT_COOKIE, 'login_email');
        $member['password'] = filter_input(INPUT_COOKIE, 'login_password');
        $member['password'] = decryptString($member['password']);
    }
}
// エラーがあれば取得
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include "../components/head.php" ?>

<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">ログイン</h2>
        <form action="auth.php" method="post">
            <div class="form-floating mt-3">
                <input class="form-control" type="email" name="email" value="<?= @$member['email'] ?>">
                <label class="form-label" for="">Email</label>
                <p class="text-danger"><?= @$errors["email"] ?></p>
            </div>

            <div class="form-floating mt-3">
                <input class="form-control" type="password" name="password" value="<?= @$member['password'] ?>">
                <label class="form-label" for="">パスワード</label>
                <p class="text-danger"><?= @$errors["password"] ?></p>
            </div>

            <div class="form-checkbox mt-3">
                <input class="form-checkbox-input" type="checkbox" name="is_save" id="is_save" <?= $checked ?>>
                <label class="form-checkbox-label" for="is_save">ブラウザに保存</label>
            </div>

            <div class="text-center mt-3">
                <button class="btn btn-primary w-100 me-1 mb-3">ログイン</button>
                <a href="../regist/" class="btn btn-outline-primary w-100">新規会員登録</a>
            </div>
        </form>
    </main>
</body>

</html>