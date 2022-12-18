@extends('estore.layout')

@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ CUSTOMER ]</h1></div>

<BR>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Customer :  {{ Auth::user()->name }} </h3>
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
        <label class="col-sm-2 col-form-label">Product Name: {{ $item->name }}</label>
    </div>

    <br>

    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="gender" class="col-sm-2 col-form-label">Employee :</label>
        <div class="col-sm-4">
        <select name="employee_id" class="form-select"  aria-label="Default select example" required>
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        </div>
    </div>

    <br>

    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="mobile" class="col-sm-2 col-form-label">price : {{ $item->price }}</label>
    </div>

    <input type="hidden" name="product_id" value="{{ $item->id }}">
    <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">



    <br><br>
    
    <button type="submit" name="reg" class="btn btn-primary">Order Now !</button>
    </div>
    
</diV>
</form>

@endsection