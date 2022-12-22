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

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('estore.customer',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //    
        $request->validate(
            [
                'product_id' => 'required',
                'employee_id' => 'required',
                'customer_id' => 'required',
                'status_info' => 'required',
            ]
            );
            Order::create($request->all());

            return redirect()->route('order.index')->with('success','Order saved ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        return view('estore.actions.placeOrder',compact('order'));
        
    }

    public function updateStatus(Order $order)
    {
        //

        if(Auth::user()->role == 'employee')
        {
            $affected = DB::table('orders')
            ->where('id', $order->id)
            ->update(['status' => 'delivered']);

            return redirect()->route('gotoemployeeorder');
        }
        else{

            $affected1 =  DB::table('orders')
            ->where('id', $order->id)
            ->update(['status' => 'cancelled']);

            return redirect()->route('customerOrder');

        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        return view('estore.actions.placeOrder',compact('request'));
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    
}
