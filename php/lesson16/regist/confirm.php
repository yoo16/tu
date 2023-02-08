<?php
require_once "../setting.php";

$controller = new RegistController();
$controller->confirm();

function validate(array $posts)
{
    $errors = [];

    $length = mb_strlen($posts['name']);
    if (empty($posts['name'])) {
        $errors['name'] = "氏名を入力してください。";
    } else if ($length > 20) {
        $errors['name'] = "氏名は20文字以内で入力してください。";
    }
    if (empty($posts['email'])) {
        $errors['email'] = "Emailを入力してください。";
    }
    $length = mb_strlen($posts['password']);
    if (empty($posts['password'])) {
        $errors['password'] = "パスワードを入力してください。";
    } else if ($length < 4 || $length > 15) {
        $errors['password'] = "パスワードは4文字以上15文字以内で入力してください。";
    }
    return $errors;
}
