@extends('app')

@section('content')
@foreach ($orders as $order)
    <ul>
        <li>
            Name {{ $order->name}}
        </li>
        <li>
           Price {{ $order->price}}
        </li>
        <li>
            Paymnet status {{ $order->payment_status}}
         </li>
         <li>
            Payment method {{ $order->payment_method}}
         </li>
         <li>
            Address {{ $order->address}}
         </li>
    </ul>
@endforeach
@endsection
