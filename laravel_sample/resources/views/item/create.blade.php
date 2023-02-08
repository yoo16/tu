@extends('layouts.app')

@section('content')
<h2>{{ __('messages.new_item') }}</h2>

@include('components.error')

<div>
    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="" class="form-label">{{ __('messages.item_name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="" class="form-label">{{ __('messages.price') }}</label>
            <input type="number" class="form-control" name="price" value="{{ old('price') }}">
        </div>
        <div>
            <button class="btn btn-primary w-100 mb-2">{{ __('messages.update') }}</button>
            <a href="{{ route('item.index') }}" class="btn btn-outline-primary w-100">{{ __('messages.back') }}</a>
        </div>
    </form>
</div>
@endsection