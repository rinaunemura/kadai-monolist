@extends('layouts.app')

@section('content')
    <h1>もってるものランキング</h1>
    @include('items.items', ['items' => $items])
@endsection
