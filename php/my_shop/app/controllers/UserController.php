<?php
class UserController extends Controller
{

    public function index()
    {
        if (empty($_SESSION['auth_user'])) {
            header('Location: ../login/');
            exit;
        } else {
            $user = $_SESSION['auth_user'];
        }
        $order = new Order();
        $data = [
            'user' => $user,
            'orders' => $order->histories($user['id']),
        ];
        View::render('user/index', $data);
    }

    public function logout()
    {
        if (isset($_SESSION['auth_user'])) {
            unset($_SESSION['auth_user']);
        }
        header('Location: ../login/');
    }
}
