@extends('estore.layout')

@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ ADMIN ]</h1></div>

<BR>

<div class="btn-primary" style="padding:5px">

<a class="btn btn-info" href="#"><h4>Admin : {{Auth::user()->name}} </h4></a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;




<a class="btn btn-info" href="{{  route('page.index') }}">Products</a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



<a class="btn btn-info" href="{{  route('page.create') }}">Employees </a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



<a class="btn btn-secondary" href="{{ route('logout') }}">LOG OUT</a>

</div>

    <br>
    <br>

   <h3 style="text-align:center;" > WELCOME ADMIN </h3>
@endsection