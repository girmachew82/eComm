@extends('app')
@section('content')
    <div class="row">
        @if (session()->has('success'))
        <div class="btn btn-success">{{ session('success') }}</div>
    @endif
        <div class="col">
            <img src=" /{{ $product->gallery }}" alt="">
        </div>
        <div class="col">
            <a href="/">Go Back</a>

            <h3>Name: {{ $product->name }}</h3>
            <h3>Price: {{ $product->price }}</h3>

            <p>
                {{ $product->discription }}
            </p>
            <form action="/add_to_cart" >
                <input type="hidden" value="{{ $product->id }}" name="product_id">
                <p>
                    <button class="btn btn-primary">Add to Cart</button>
                </p>
            </form>

            <p>
                <button class="btn btn-primary">Buy now</button>
            </p>
        </div>
    </div>
@endsection
