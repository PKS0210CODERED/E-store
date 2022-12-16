@extends('estore.layout')

@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ CUSTOMER ]</h1></div>

<BR>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Customer :  {{Auth::user()->name}} </h3>
            </div>

            <br>
               
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('logout') }}">LOG OUT</a>
            </div>
        </div>   
    </div>
   
    <br>
    <br>

   <!-- success alert message -->
        @if(session()->get('success'))
        <div class="alert alert-success">
            <p>{{ session()->get('success') }}</p>
        </div>
        @endif
    <br>
   
    <h2> PLACE ORDERS </H2>
    <br>

<form action="{{ route('order.store') }}" method="POST">
 @csrf
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="name" class="col-sm-2 col-form-label">Product Name:</label>
        <div class="col-sm-4">
        <input type="name" class="form-control" name="name" required>
        </div>
    </div>

    <br>

    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-4">
        <input type="email" class="form-control" name="email" required>
        </div>
    </div>

    <br>

    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
        <div class="col-sm-4">
        <select name="gender" class="form-select"  aria-label="Default select example" required>
            <option selected disabled>Open this select menu</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>
        </div>
    </div>

    <br>

    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="mobile" class="col-sm-2 col-form-label">Address:</label>
        <div class="col-sm-4">
        <input type="address" class="form-control" name="address" required>
        </div>
    </div>

    <br>

    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="mobile" class="col-sm-2 col-form-label">Mobile:</label>
        <div class="col-sm-4">
        <input type="" class="form-control" name="mobile" required>
        </div>
    </div>
    
    <br>

    <div class="mb-2 row">
    <div class="col-sm-2"></div>
        <label for="inputPassword" class="col-sm-2 col-form-label" >Password:</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" name="password" required>
        </div>
    </div>
    <input type="hidden" name="role" value="customer">
    <div>

    <br>
    <br>
    
    <button type="submit" name="reg" class="btn btn-primary">Sign Up</button>
    </div>
    
</diV>
</form>

@endsection