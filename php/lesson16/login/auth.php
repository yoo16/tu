<?php
require_once "../setting.php";
require_once "../lib/functions.php";

$controller = new LoginController();
$controller->auth();

function validate(array $posts)
{
    $errors = [];
    if (empty($posts['email'])) {
        $errors['email'] = "Emailを入力してください。";
    }
    // TODO：共通化
    $pattern = "/^[\w\.\@\/\-]{4,15}$/";
    if (empty($posts['password'])) {
        $errors['password'] = "パスワードを入力してください。";
    } else if (!preg_match($pattern, $posts['password'])) {
        $errors['password'] = "パスワードは4文字以上15文字以内で入力してください。";
    }
    return $errors;
}

function fetchUserByEmail(string $email)
{
    $users = loadCSV(USER_CSV);
    $emails = array_column($users, 'email');
    // Email検索
    $index = array_search($email, $emails);
    if (is_int($index)) {
        return $users[$index];
    }
}

function auth(string $email, string $password)
{
    // Emailでユーザ取得
    $user = fetchUserByEmail($email);
    // パスワードが一致したらユーザを返す
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
}