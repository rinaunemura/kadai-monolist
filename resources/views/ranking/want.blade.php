@extends('layouts.app')

@section('content')
    <h1>ほしいものランキング</h1>
    @include('items.items', ['items' => $items])
@endsection