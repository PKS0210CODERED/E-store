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



<a class="btn btn-warning" href="#">Employees </a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
   
    <h2> EMPLOYEES </H2>
    <br>
    <a class="btn btn-outline-success" href="{{ route('page2.index') }}">Entroll Employee</a>
    <br><br>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>E-MAIL</th>
            <th>MOBILE</th>
            <th width="280px">ACTION</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{  $user->id }}</td>
            <td>{{  $user->name }}</td>
            <td>{{  $user->email }}</td>
            <td>{{  $user->mobile }}</td>
            <td>
                
                <form action ="{{route('user.destroy',$user->id)}}" method="POST" >
                    @csrf
                    @method("DELETE")

                    <a class="btn btn-info" href="{{route('user.show',$user->id)}}"> show</a>
                    <a class="btn btn-primary" href="{{route('user.edit',$user->id)}}"> edit</a>
                    <button typr="submit" class="btn btn-danger"> Delete </button>
                </form> 
            </td>
        </tr>
        @endforeach
        
    </table>

@endsection