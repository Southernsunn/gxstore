<?php

namespace gxstore\Http\Controllers;

use Illuminate\Http\Request;

use gxstore\Http\Requests;

use DB;
use Redirect;
use Auth;
use Session;

class c_shopping_cart extends Controller
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
        if (Auth::check()) {

          # code...
          $id_spCart  = Auth::user()->id;
          $quantity = 1;
          \gxstore\shopping_carts_details::create([
            'shopping_cart_id'  =>    $id_spCart,
            'product_id'        =>    $id,
            'quantity'          =>    $quantity,
          ]);
          Session::flash('message-addCart', 'Your product has been added to your shopping cart successfully');
          return Redirect::route('gxstore.my-shopping-cart.details.index');
        }

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
