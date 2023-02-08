<?php
class Order extends Model
{
    public array $columns =
    [
        'id',
        'user_id',
        'item_id',
        'count',
        'price',
        'created_at',
    ];
    public string $csv_file = DATA_DIR . 'orders.csv';

    public function purchase(int $user_id, CartItem $cart_item)
    {
        date_default_timezone_set('Asia/Tokyo');
        $values = $cart_item->getItems();
        $date = new DateTime();
        $now = $date->format('Y-m-d H:i:s');
        $posts = [];
        foreach ($values as $value) {
            $posts['user_id'] = $user_id;
            $posts['item_id'] = $value['item']['id'];
            $posts['price'] = $value['item']['price'];
            $posts['count'] = $value['count'];
            $posts['created_at'] = $now;
            $this->save($posts);
        }
        $cart_item->clear();
    }

    public function histories(int $user_id)
    {
        $values = $this->getWithItem();
        if (!$values) return;
        $orders = array_filter(
            $values,
            function ($value) use ($user_id) {
                return $value['user_id'] == $user_id;
            }
        );
        return $orders;
    }

    public function getWithItem()
    {
        $item = new Item();
        $items = $item->all();
        $item_ids = array_column($items, 'id');

        $orders = $this->all();
        if (!$orders) return;
        foreach ($orders as $key => $order) {
            $index = array_search($order['item_id'], $item_ids);
            $orders[$key]['item'] = $items[$index];
        }

        return $orders;
    }
}
