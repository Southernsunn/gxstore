<?php

namespace gxstore\Http\Controllers;

use Illuminate\Http\Request;

use gxstore\Http\Requests;

Use DB;
Use Auth;
use Session;
use Redirect;

class c_shopping_cart_details extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {
          # code...
          //get id_chopping_cart
          $id_myCart = Auth::user()->id;

          $query_myItems = DB::table('shopping_carts_details as SCD')
          ->join('products as P', 'SCD.product_id', '=', 'P.product_id')
          ->select('P.attachment', 'P.product_name', 'P.price', 'SCD.quantity')
          ->where('SCD.shopping_cart_id', '=', $id_myCart)->get();


          $query_subTotal = DB::table('shopping_carts_details as scd')->selectRaw('SUM(scd.quantity * p.price) as SubTotal_Cash, SUM(scd.quantity) as SubTotal_Quantity')
          ->join('products as p', 'p.product_id', '=', 'scd.product_id')
          ->join('shopping_carts as sc', 'scd.shopping_cart_id', '=', 'sc.shopping_cart_id')
          ->where('sc.shopping_cart_id', '=', $id_myCart)->get();

          return view('personal-area.shopping-cart', ['cart' => $query_myItems, 'SubTotal_A' => $query_subTotal]);
        }
        else {
          return Redirect::route('v_signin')->with('message', 'signOrsignUP');
        }
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
