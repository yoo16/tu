@extends('layouts.app')

@section('content')
<h2>検索キーワード</h2>
<p>{{ $keyword }}</p>
<div>
    <form action="{{ route('search') }}" method="get">
        <input type="text" name="keyword" class="form-control">
        <button class="btn btn-primary">検索</button>
    </form>
</div>
@endsection