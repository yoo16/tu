<?php

class RegistController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['member'])) {
            unset($_SESSION['member']);
        }
        if (isset($_SESSION['errors'])) {
            unset($_SESSION['errors']);
        }
        header('Location: input.php');
    }

    public function input()
    {
        $member = [];
        $errors = [];

        if (isset($_SESSION['member'])) {
            $member = $_SESSION['member'];
        }
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
        }
        $data = [
            'member' => $member,
            'errors' => $errors,
        ];
        View::render('regist/input', $data);
    }

    public function confirm()
    {
        $posts = check($_POST);
        $_SESSION['member'] = $_POST;
        $errors = validate($posts);
        $_SESSION['errors'] = $errors;
        if ($errors) {
            header("Location: input.php");
            exit;
        }
        $data = [
            'posts' => $posts,
            'errors' => $errors,
        ];
        View::render('regist/confirm', $data);
    }

    public function add()
    {
        init();
        checkPostRequest();
        initUser();
        if (isset($_SESSION['member'])) {
            $posts = $_SESSION['member'];
            $posts['password'] = password_hash($posts['password'], PASSWORD_DEFAULT);
            save($posts);
        }
        header('Location: result.php');
        exit;
    }

    public function result()
    {
        if (isset($_SESSION['member'])) {
            unset($_SESSION['member']);
        } else {
            header('Location: ./');
        }
        View::render('regist/result');
    }

}
