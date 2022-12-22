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

            <br>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('page2.create') }}"> Back</a>
            </div>

             <br>

            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('logout') }}">LOG OUT</a>
            </div>
        </div>   
    </div>
   
    <br>
    <br>


     <!-- error messages --> 

   @if($errors->any())
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
         <ul>
         @foreach ($errors->all() as $error)
        <li>{{$error}} </li>
         @endforeach
        </ul>
    </div>
     <br />
     @endif
  
    <form action="{{ route('getpassword') }}" method="POST">

        @csrf
    <diV class="container-sm" style="border:solid 1px green; padding:30px;text-align:center">
   
            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label" >Current Password:</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" name="oldpassword" required>
                </div>
            </div>
            
            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label" >New Password:</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" name="newpassword" required>
                </div>
            </div>
            
            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label" >Confirm New Password:</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" name="confirmpassword" required>
                </div>
            </div>
            
            <br>

            
            <div>

            <br>
            
            <button type="submit" name="reg" class="btn btn-success">CHANGE</button>
            </div>
            
        </diV>

    </form>

    
@endsection('content')
