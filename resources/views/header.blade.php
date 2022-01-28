<?php
use  App\Http\Controllers\ProductController;
$total =0;
if(session()->has('user'))
{
    $total= ProductController::cartItem();

}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">eComm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/myorders">Order</a>
          </li>

        </ul>
        <form class="d-flex" action="search" >
            @csrf
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name ='query'>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right">
            @if(session()->has('user'))
            <li><a href="/cartList">Cart({{ $total }})</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ session()->get('user')['name']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Change username</a></li>
                  <li><a class="dropdown-item" href="#">profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </li>
            @else
            <li><a href="/login">login</a></li>|
            <li><a href="/register">Register</a></li>

              @endif
        </ul>
      </div>
    </div>
  </nav>
