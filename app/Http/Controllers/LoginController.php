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
                $orders = Order::all()->where('employee_id','Auth::user()->id');              
                return view('estore.employee',compact('orders'));
               
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

}
