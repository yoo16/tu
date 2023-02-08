<?php
require_once '../setting.php';
require_once '../lib/functions.php';

init();
checkPostRequest();

$posts = check($_POST);
$_SESSION['login'] = $_POST;
$errors = validate($posts);

$user = auth($posts['email'], $posts['password']);
if ($user) {
    $_SESSION['auth_user'] = $user;
    header("Location: ../user/index.php");
} else {
    $errors['email'] = "ユーザ名かパスワードが間違っています。";
}

$_SESSION['errors'] = $errors;

if ($errors) {
    header("Location: input.php");
    exit;
}

function validate(array $posts)
{
    $errors = [];
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
?>