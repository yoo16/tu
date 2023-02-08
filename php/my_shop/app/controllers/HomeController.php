<?php 

class HomeController extends Controller
{
    public function index()
    {
        $item = new Item();
        $items = $item->all();
        $data = [
            'items' => $items,
        ];
        View::render('home/index', $data);
    }
}
