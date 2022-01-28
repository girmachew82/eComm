@extends('app')
@section('content')
<div class="card">
    <div class="car-header">
        <h3>Products in a cart</h3>
        <div class="card-tools">
            <a href="/ordernow" class="btn btn-success">Order now</a>
        </div>
    </div>
    <div class="card card-body">


        @foreach ($products as $item)
        <div class="trending-item">

        <img src="{{ $item->gallery}}" alt="" class="trending-image">
        <div>
            <h3>
                Name {{ $item->name }}
                <br>
                Price {{ $item->price }}

            </h3>
            <p><a href="/removecart/{{ $item->cart_id }}" class="btn btn-danger">Remote to cart</a></p>
        </div>

    </div>
        @endforeach
    </div>
</div>
@endsection
