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

            <br>
               
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('gotoemployeeorder') }}">My Orders</a>
            </div>

        </div>   
    </div>
   
    <br>
    <br>

    <h3 style="text-align:center;" > WELCOME EMPLOYEE </h3>

   
@endsection