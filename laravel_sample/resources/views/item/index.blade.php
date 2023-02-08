@extends('layouts.app')

@section('content')
<h2>{{ __('messages.item') }}</h2>

<div>
    {{ $items->links() }}
</div>

<div>
    <a href="{{ route('item.create') }}">{{ __('messages.new_add') }}</a>
</div>
<div>
    <table class="table">
        <tr>
            <th></th>
            <th>{{ __('messages.item_name') }}</th>
            <th>{{ __('messages.price') }}</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td><a href="{{ route('item.edit', $item->id) }}">{{ __('messages.edit') }}</a></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection