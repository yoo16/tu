<?php
require_once '../lib/functions.php';

init();

if (isset($_SESSION['member'])) {
    unset($_SESSION['member']);
}
if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}

// 入力画面にリダイレクト
header('Location: input.php');
?>
