@extends('estore.layout')

@section('content')

<br>
<br>

<div class="btn-primary" style="padding:5px"><h1 style="text-align:center;margin-left:0px;margin-right:0px">E-STORE [ ADMIN ]</h1></div>

<BR>

<div class="btn-primary" style="padding:5px">

<a class="btn btn-info" href="#"><h4>Admin : {{Auth::user()->name}} </h4></a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;




<a class="btn btn-warning" href="#">Products</a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



<a class="btn btn-info" href="{{  route('page.create') }}">Employees </a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



<a class="btn btn-secondary" href="{{ route('logout') }}">LOG OUT</a>

<br>

</div>

<br><br>

   <!-- success alert message -->
         @if(session()->get('success'))
        <div class="alert alert-success">
            <p>{{ session()->get('success') }}</p>
        </div>
        @endif
    <br>

    <h2> PRODUCTS </H2>
    <br>

    <a class="btn btn-outline-success" href="{{  route('item.create') }}">Create Product</a>

    <br><br>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>PRODUCT</th>
            <th>DETAILS</th>
            <th>PRICE</th>
            <th width="280px">ACTION</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{  $product->id }}</td>
            <td>{{  $product->name }}</td>
            <td>{{  $product->detail }}</td>
            <td>{{  $product->price }}</td> 
            <td>
                <form action ="{{route('item.destroy',$product->id)}}" method="POST" >
                    @csrf
                    @method("DELETE")

                    <a class="btn btn-info" href="{{route('item.show',$product->id)}}"> show</a>
                    <a class="btn btn-primary" href="{{route('item.edit',$product->id)}}"> edit</a>
                    <button typr="submit" class="btn btn-danger"> Delete </button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>

@endsection