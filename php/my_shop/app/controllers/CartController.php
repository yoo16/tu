<?php
class CartController extends Controller
{

    public function index()
    {
        $cart_item = new CartItem();
        $data['cart_items'] = $cart_item->getItems();
        $data['total_price'] = $cart_item->totalPrice();
        View::render('cart/index', $data);
    }

    public function add()
    {
        if (isset($_GET['id'])) {
            $count = (isset($_GET['count'])) ? $_GET['count'] : null;
            $cart_item = new CartItem();
            $cart_item->add($_GET['id'], $count);
        }
        header('Location: ./');
    }

    public function remove()
    {
        if (isset($_GET['id'])) {
            $cart_item = new CartItem();
            $cart_item->remove($_GET['id']);
        }
        header('Location: ./');
    }

    public function purchase()
    {
        $auth_user = $_SESSION['auth_user'];
        $cart_item = new CartItem();
        if ($auth_user && $cart_item->hasItems()) {
            $order = new Order();
            $order->purchase($auth_user['id'], $cart_item);
        }
        header('Location: ./result.php');
    }

    public function result()
    {
        View::render('cart/result');
    }
}
