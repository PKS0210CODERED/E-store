@extends('estore.layout')
@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ ADMIN ]</h1></div>

<BR>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Details of Product</h3>
            </div>

            <br>


            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
            </div>           
        </div>
    </div>
   
<br><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong><p> {{ $item->name }} </p>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>{{ $item->detail }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>{{ $item->price }}
            </div>
        </div>

    </div>

@endsection