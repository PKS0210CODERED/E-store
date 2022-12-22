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
                <a class="btn btn-primary" href="{{ route('returncustomer') }}">Back</a>
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
   
    <h2> CUSTOMER ORDER DETAILS </H2> 
    <br>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>DETAIL</th>
            <th>PRICE</th>
            <th>DELIVERY PERSON</th>
            <th style="text-align:center">STATUS</th>
        </tr>

        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->Pname }}</td>
            <td>{{ $order->detail }}</td>
            <td>{{ $order->price }}</td>
            <td>{{ $order->ename }}</td>
            @if( $order->status == 'delivered')
                <td style="text-align:center">Delivered</td>
            @elseif(  $order->status  == 'cancelled')
                <td style="text-align:center">Cancelled</td>
            @else
                <td style="text-align:center"><a class="btn btn-danger" href="{{ route('updatestatus',$order->id) }}"> Cancel Order</a></td>
            @endif


        </tr>
        @endforeach
        
    </table>



@endsection