@extends('estore.layout')
@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ ADMIN ]</h1></div>

<BR>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit a Product </h3>
            </div>

            <br>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
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
  
    <form action="{{ route('item.update',$item->id) }}" method="POST">

        @csrf
        @method('PATCH')
    <diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-4">
                <input type="name" class="form-control" name="name" value="{{ $item->name }}" required>
                </div>
            </div>

            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Detail:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" name="detail" value="{{ $item->detail }}" required>
                </div>
            </div>

            <br>

            <div class="mb-2 row">
                <div class="col-sm-2"></div>
                <label for="mobile" class="col-sm-2 col-form-label">price:</label>
                <div class="col-sm-4">
                <input type="number" class="form-control" name="price" value="{{ $item->price }}" required>
                </div>
            </div>

            <br>
            <br>
            
            <button type="submit" name="reg" class="btn btn-primary">UPDATE</button>
            </div>
            
        </diV>

    </form>

 @endsection