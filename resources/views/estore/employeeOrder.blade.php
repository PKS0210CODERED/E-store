@extends('estore.layout')

@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ EMPLOYEE ]</h1></div>

<BR>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Employee : {{ Auth::user()->name }} </h3>
            </div>

            <br>
               
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('reset') }}">Reset Password</a>
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
   
    <h2> ORDER DETAILS </H2>
    <br>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>PRODUCT NAME</th>
            <th>DETAIL</th>
            <th>PRICE</th>
            <th>CUSTOMER NAME</th>
            <th>CUSTOMER ADDRESS</th>
            <th>CUSTOMER MOBILE</th>
            <th>DATE</th>
            <th>DELIVERED</th>
        </tr>

       @foreach($orders as $order)
        <tr>
            <td>{{  $order->id }}</td>
           
            <td>{{  $order->Pname }}</td>
            <td>{{  $order->detail }}</td>
            <td>{{  $order->price }}</td>
            <td>{{  $order->name }} </td>
            <td>{{  $order->address }}</td>
            <td>{{  $order->mobile }}</td>
            <td>{{  $order->created_at }}</td>
            @if( $order->status == 'delivered')
                <td style="text-align:center">Delivered</td>
            @elseif(  $order->status  == 'cancelled')
                <td style="text-align:center">Cancelled</td>
            @else
                <td style="text-align:center"><a class="btn btn-success" href="{{ route('updatestatus',$order->id) }}"> YES</a></td>
            @endif
        
        </tr>
        @endforeach
    </table>



@endsection