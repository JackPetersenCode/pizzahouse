@extends('layouts.app')

@section('content')
<div class="welcome-message">
    <img src="/img/pizza-house.png" alt="Pizza House Logo">
    <div class="welcome">
        The North's Best Pizzas
    </div>
    <p class="msg">{{ session('msg') }}</p>
    <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
</div>
@endsection
