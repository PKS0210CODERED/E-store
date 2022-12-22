<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use validator;
use Auth;


class LoginController extends Controller
{
    //

    function checklogin(Request $request)
    {
        //validation

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
            
        ]);

        //authentication

        $user_data =array(

            'email' =>$request->get('email'),
            'password' => $request->get('password'),
            
        );

        if(Auth::attempt($user_data))
        {
            
            if(Auth::user()->role == 'employee')
            {
                
                return view('estore.employee');
               
            }
            elseif(Auth::user()->role == 'customer')
            {
                $items = Item::all();
                return view('estore.customer',compact('items'));
               
            }
            elseif(Auth::user()->role == 'admin')
            {                

                return view('estore.admin')->with('success','WELCOME ADMIN');

            }
                

        }
        else
        {
            return back()->with('error','Wrong login Details');
        }
    }

    function logout()
    {
        Auth::logout();
        return view('estore.login');
    }

    function gotoEmployeeOrder()
    {
        $orders = DB::table('orders')
        ->where('employee_id',Auth::user()->id)
        ->join('items','orders.product_id','=','items.id')
        ->join('users','orders.customer_id','=','users.id')
        ->select('orders.id','items.name as Pname','items.detail','items.price','users.name','users.address','users.mobile','orders.created_at','orders.status')
        ->get();

        return view('estore.employeeOrder',compact('orders'));
    }

}
