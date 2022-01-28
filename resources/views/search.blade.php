@extends('app')

@section('content')



<div class="trending-wrapper">
    <h3>Search result</h3>
    @forelse ($products as $item)
    <div class="trending-item">
        <a href="detail/{{$item['id'] }}">

    <img src="{{ $item['gallery'] }}" alt="" class="trending-image">
    <div>
        <h3>
            {{ $item['name'] }}
        </h3>
    </div>
</a>

</div>
    @empty
    <p class="btn btn-warning">No result found</p>
    @endforelse



</div>

@endsection
