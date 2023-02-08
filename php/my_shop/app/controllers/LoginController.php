<?php

class LoginController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['errors'])) {
            unset($_SESSION['errors']);
        }
        header('Location: input.php');
    }

    public function input()
    {
        $checked = '';
        $member = [];
        $errors = [];

        $user = new User();
        $member = $user->loadLoginCookie();
        if ($member) $checked = 'checked';

        if (isset($_SESSION['login'])) {
            $member['email'] = $_SESSION['login']['email'];
            $member['password'] = '';
        }
        // エラーがあれば取得
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
        }

        // View表示
        $data = [
            'member' => $member,
            'errors' => $errors,
            'checked' => $checked,
        ];
        View::render('login/input', $data);
    }

    public function auth()
    {
        checkPostRequest();

        $user = new User();

        $posts = check($_POST);
        $_SESSION['login'] = $_POST;
        $user->validateLogin($posts);
        $user->saveLoginCookie($posts);

        if (!$user->errors) {
            $auth_user = $user->auth($posts['email'], $posts['password']);
            if ($auth_user) {
                $_SESSION['auth_user'] = $auth_user;
                header("Location: ../user/index.php");
                exit;
            }
        }

        $_SESSION['errors'] = $user->errors;

        if ($user->errors) {
            header("Location: input.php");
            exit;
        }
    }
}
