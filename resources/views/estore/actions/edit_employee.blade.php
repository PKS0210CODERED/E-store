@extends('estore.layout')

@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ ADMIN ]</h1></div>

<BR>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit an Employee </h3>
            </div>

            <br>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('page.create') }}"> Back</a>
            </div>

            <br>
            
        </div>
    </div>
   
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
  
    <form action="{{ route('user.update',$user) }}" method="POST">

        @csrf
        @method('PATCH')
    <diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-4">
                <input type="name" class="form-control" name="name" value="{{ $user->name }}" required>
                </div>
            </div>

            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-4">
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                </div>
            </div>

            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
                <div class="col-sm-4">
                <select name="gender" class="form-select"  aria-label="Default select example" value="{{ $user->gender }}" required>
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
                <input type="address" class="form-control" name="address" value="{{ $user->address }}" required>
                </div>
            </div>

            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="mobile" class="col-sm-2 col-form-label">Mobile:</label>
                <div class="col-sm-4">
                <input type="number" class="form-control" name="mobile" value="{{ $user->mobile }}" required>
                </div>
            </div>
            
            <br>

            
            <input type="hidden" name="role" value="employee">
            <div>

            <br>
            <br>
            
            <button type="submit" name="reg" class="btn btn-primary">UPDATE</button>
            </div>
            
        </diV>

    </form>

 @endsection