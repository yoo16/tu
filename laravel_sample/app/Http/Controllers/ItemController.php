<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $min = $request->query('min');
        $max = $request->query('max');
        $item = new Item();
        if ($name = $request->query('name')) {
            $item->where('name', 'LIKE', "%{$name}%");
        } else if (is_numeric($min) && is_numeric($max)) {
            $item->where('price', '>=', $min)
                 ->where('price', '<=', $max);
        }
        $items = $item->paginate(5);
        // $items = Item::orderBy('price', 'desc')->get();
        $data = ['items' => $items];
        return view('item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        $posts = $request->all();
        Item::create($posts);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $item = Item::find($id);
        $data = ['item' => $item];
        return view('item.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $item = Item::find($id);
        $data = ['item' => $item];
        return view('item.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, int $id)
    {
        $posts = $request->all();
        unset($posts['_token']);
        Item::where('id', $id)->update($posts);
        return redirect()->route('item.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Item::destroy($id);
        return redirect()->route('item.index');
    }
}
