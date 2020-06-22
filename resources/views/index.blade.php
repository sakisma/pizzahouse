@extends('layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            All the pizzas goes here
        </div>

        <p>
            @foreach ($pizzas as $pizza)
            <div>
            <div class="pizza-item">
                <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>

            </div>
            @endforeach
        </p>
    </div>
</div>
@endsection