<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use validator;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('estore.login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estore.register');
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
                'name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'mobile' => 'required',
                'password' => 'required',
                'role' => 'required'

            ]);

            $user = new User([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'gender' => $request->get('gender'),
                'address' => $request->get('address'),               
                'mobile' => $request->get('mobile'),
                'role' => $request->get('role'),
                'password' => Hash::make($request->get('password')) 
            ]);
            $user->save();

            if($request->role == 'employee')
            {

                $users = User::all();

                return view('estore.adminEmployee',compact('users'))->with('success','Employee saved !');
            }
            else{

                return redirect()->route('user.index')->with('success','User saved ! ');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('estore.actions.show_employee',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('estore.actions.edit_employee',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'mobile' => 'required',
                'password' => 'required',
                'role' => 'required'

            ]
            );

        $item->update($request->all());
        return redirect()->route('item.index')->with('success','Product updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('page.create')->with('success','Employee deleted !');

    }
    
    public function getemployee()
    {
        //
        
        $employees = DB::table(`users`)->where(`role`, 'employee');
        
        return view('estore.adminEmployee',compact('employees'));

    }


}
