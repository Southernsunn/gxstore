<?php

namespace gxstore\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
use gxstore\Http\Requests;

class c_signup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        if ($request['passwd']==$request['repasswd']) {
          # code...
          \gxstore\User::create([
            'name'        =>    $request['firstname'],
            'last_name'   =>    $request['lastname'],
            'email'       =>    $request['email'],
            'password'    =>    bcrypt($request['passwd']),
          ]);

          $query = DB::table('users')->select('id')->orderBy('updated_at', 'desc')->first();

          $user_id = $query->id;

          \gxstore\shopping_carts::create([
            'user_id' =>  $user_id,
          ]);
          return Redirect::route('v_signin')->with('message', 'store');

        }
        else {
          # code...
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
