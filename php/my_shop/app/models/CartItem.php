<?php
class CartItem extends Model
{

    public function add(int $id, int $count = null)
    {
        $item = new Item();
        $select_item = $item->find($id);
        if ($select_item) {
            if (empty($count)) {
                if ($value = $this->find($id)) {
                    // カート商品がある場合
                    $count = $value['count'] + 1;
                } else {
                    // カート商品がない場合
                    $count = 1;
                }
            }
            $_SESSION['cart_items'][$id] = [
                'item' => $select_item,
                'count' => $count,
            ];
        }
    }

    public function find(int $id)
    {
        $items = $this->getItems();
        if ($items && array_key_exists($id, $items)) {
            return $items[$id];
        }
    }

    public function remove(int $id)
    {
        if ($this->find($id)) {
            unset($_SESSION['cart_items'][$id]);
        }
    }

    public function hasItems()
    {
        return (isset($_SESSION['cart_items']) && $_SESSION['cart_items']);
    }

    public function getItems()
    {
        if ($this->hasItems()) return $_SESSION['cart_items'];
    }

    public function totalPrice()
    {
        $total_price = 0;
        if ($cart_items = $this->getItems()) {
            foreach ($cart_items as $cart_item) {
                $total_price += $cart_item['item']['price'] * $cart_item['count'];
            }
        }

        return $total_price;
    }

    public function clear()
    {
        if (isset($_SESSION['cart_items'])) {
            unset($_SESSION['cart_items']);
        }
    }
}
