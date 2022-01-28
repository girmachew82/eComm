@extends('app')
@section('content')
<div class="card">
    <div class="car-header">
        <h3>Order</h3>

    </div>
    <div class="card card-body">

        <table class="table">

            <tbody>
              <tr>
                <th scope="row">Amount</th>
                <td>$ {{ $total }}</td>
              </tr>
              <tr>
                <th scope="row">Tax</th>
                <td>$ 0</td>

              </tr>
              <tr>
                <th scope="row">Delivery</th>
                <td colspan="2">$ 10</td>
              </tr>
              <tr>
                <th scope="row">Total Amount</th>
                <td colspan="2">{{ $total + 10 }}</td>
              </tr>
            </tbody>
          </table>
            <form action="/orderplace" method="POST">
                @csrf
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your address" name="address"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="Tele Birr">
                        <label class="form-check-label" for="payment1">
                        Tele Birr
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="CBE">
                        <label class="form-check-label" for="payment1">
                          CBE
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="Online">
                        <label class="form-check-label" for="payment1">
                          Online
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="Cash go">
                        <label class="form-check-label" for="payment1">
                         Cash go
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Order now">
                  </div>
            </form>
    </div>
</div>
@endsection
