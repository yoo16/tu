@extends('layouts.app')

@section('content')
<h2 class="mt-2">{{ __('messages.item') }}{{ __('messages.edit') }}</h2>
<div>
    <form action="{{ route('item.update', $item->id) }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="" class="form-label">{{ __('messages.item_name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $item->name) }}">
        </div>
        <div class="form-group mb-3">
            <label for="" class="form-label">{{ __('messages.price') }}</label>
            <input type="number" class="form-control" name="price" value="{{ old('price', $item->price) }}">
        </div>
        <div>
            <button class="btn btn-primary w-100 mb-2">{{ __('messages.update') }}</button>
            <a href="{{ route('item.index') }}" class="btn btn-outline-primary w-100 mb-2">{{ __('messages.back') }}</a>
        </div>
    </form>
</div>

<div>
    <form action="{{ route('item.destroy', $item->id) }}" method="post">
        @csrf
        <button class="btn btn-danger w-100 mb-2">{{ __('messages.delete') }}</button>
    </form>
</div>
@endsection