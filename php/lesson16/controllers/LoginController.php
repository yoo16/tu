<?php

class LoginController
{
    public function index()
    {
        init();

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
        init();

        $checked = '';
        $member = [];
        $errors = [];

        $is_save = filter_input(INPUT_COOKIE, 'login_save');
        $checked = ($is_save) ? 'checked' : '';

        if (isset($_SESSION['login'])) {
            $member['email'] = $_SESSION['login']['email'];
        } else {
            if ($is_save) {
                $member['email'] = filter_input(INPUT_COOKIE, 'login_email');
                $member['password'] = filter_input(INPUT_COOKIE, 'login_password');
                $member['password'] = decryptString($member['password']);
            }
        }
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
        }

        $data = [
            'member' => $member,
            'errors' => $errors,
            'checked' => $checked,
        ];
        View::render('login/input', $data);
    }

    public function auth()
    {
        init();
        checkPostRequest();

        $posts = check($_POST);
        $_SESSION['login'] = $_POST;
        $errors = validate($posts);

        $is_save = filter_input(INPUT_POST, 'is_save');
        if ($is_save) {
            $time = time() + 60 * 60 * 24 * 30;
            setcookie('login_save', $is_save, $time);
            setcookie('login_email', $posts['email'], $time);
            setcookie('login_password', encryptString($posts['password']), $time);
        } else {
            setcookie('login_save', '');
            setcookie('login_email', '');
            setcookie('login_password', '');
        }

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
    }
}
