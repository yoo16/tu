@extends('layouts.app')

@section('content')
<div>
    <table class="table">
        <tr>
            <th></th>
            <th>商品名</th>
            <th>価格</th>
        </tr>
        <tr>
            <td><a href="{{ route('item.edit', $item->id) }}">編集</a></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
        </tr>
    </table>
</div>
@endsection