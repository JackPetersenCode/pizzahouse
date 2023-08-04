@extends('layouts.app')

@section('content')

<div class="pizza-list">
    <div class="list-title">
        Pizza List
    </div>

    @foreach($pizzas as $pizza)
        <div>
            <img src="/img/jackspizzashack.jpg">
            <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
        </div>
    @endforeach
</div>

@endsection
