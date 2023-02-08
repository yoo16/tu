<?php
require_once "../lib/functions.php";

init();

// ユーザセッション削除
if (isset($_SESSION['auth_user'])) {
    unset($_SESSION['auth_user']);
}

// ログイン画面にリダイレクト
header('Location: ../login/');
?>