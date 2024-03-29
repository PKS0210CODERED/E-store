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

            <br>

            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('customerOrder') }}">My Orders</a>
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

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>DETAIL</th>
            <th>PRICE</th>
            <th style="text-align:center">ACTION</th>
        </tr>

        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->detail }}</td>
            <td>{{ $item->price }}</td>
            <td style="text-align:center"><a class="btn btn-success" href="{{ route('placeorder',$item->id) }}"> Place Order</a></td>
        </tr>
        @endforeach
        
    </table>



@endsection