<?php

class User extends Model
{
    use UserValidate;

    public array $columns = ['id', 'name', 'email', 'password'];
    public string $csv_file = DATA_DIR . "users.csv";

    function isExistsEmail($email)
    {
        $users = loadCSV($this->csv_file);
        if (!$users) return;
        $emails = array_column($users, 'email');
        return in_array($email, $emails);
    }

    function findByEmail(string $email)
    {
        $users = loadCSV($this->csv_file);
        $emails = array_column($users, 'email');
        $index = array_search($email, $emails);
        if (is_int($index)) {
            return $users[$index];
        }
    }

    function auth(string $email, string $password)
    {
        $user = $this->findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            $this->errors['email'] = "ユーザ名かパスワードが間違っています。";
        }
    }

    public function loadLoginCookie()
    {
        $is_save = filter_input(INPUT_COOKIE, 'login_save');
        if ($is_save) {
            $member['email'] = filter_input(INPUT_COOKIE, 'login_email');
            $member['password'] = filter_input(INPUT_COOKIE, 'login_password');
            $member['password'] = decryptString($member['password']);
            return $member;
        }
    }

    public function saveLoginCookie(array $posts)
    {
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
    }
}
