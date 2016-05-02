<?php

namespace gxstore\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Session;
use gxstore\Http\Requests\Request_Login;
use gxstore\Http\Requests;

class c_auth extends Controller
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
    public function store(Request_Login $request)
    {
        //
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['passwd']])) {
          # code...
            return Redirect::route('gxstore.index');
        }
        else {
          # code...
          Session::flash('message-error', 'You have sent incorrect information.');
          return Redirect::route('v_signin');
        }
    }

    public function logout()
    {
      Auth::logout();
      return Redirect::route('v_signin');
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
