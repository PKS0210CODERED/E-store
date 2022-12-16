@extends('estore.layout')
@section('content')

<html>
    <head>      
    <title>
        login page
</title>
</head>

<br> 
<br>


<body>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E- Store</h1></div>
<br>
<br>

<!-- success alert message -->
@if(session()->get('success'))
        <div class="alert alert-success">
            <p>{{ session()->get('success') }}</p>
        </div>
        @endif
    <br>

<form action="{{ route('login') }}" method="POST">

<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">

  <!-- Email input -->


  @csrf   <!--this is the laravel security-->

  @if ($message =Session::get('error'))
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>{{$message}}</strong>
      </div>
      @endif
      @if ($errors->any())
          <div class="alert alert-danger">
              <u1>
                  @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
              </u1>
          </div>
      <br/>
      @endif



  <div class="form-outline mb-4"  style="padding:5px;margin-left:450px;margin-right:450px">
    <input type="email" id="form2Example1" name="email" class="form-control" placeholder="email" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4" style="padding:5px;margin-left:450px;margin-right:450px">
    <input type="password" name="password" id="form2Example2" class="form-control" placeholder="password"/>

  </div>

  

  <!-- Submit button -->
  <div style="text-align:center">
  <button type="submit" name="signin" class="btn btn-primary btn-block mb-4">Sign in</button>
</div>
  
</div>
</form>

<br>

<!-- Register buttons -->
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <a href="{{ route('user.create') }}"><button type="submit" class="btn btn-primary">Register Now!</button></a>
</diV>


</body>

</html>

@endsection('content')