<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShoppinCart;
use App\EnCarrito;


class EnCarritoController extends Controller
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
    public function store(Request $request){

      $idCarrito = \Session::get('idCarrito');
      $carrito = ShoppinCart::encontrarOCrearId($idCarrito);
      \Session::put('idCarrito', $carrito->id);


      EnCarrito::create([
        "carrito_id" => $carrito->id,
        "products_id" => $request->Products_id
      ]);

      /*$enCar = new EnCarrito;

      $enCar->carrito_id = $carrito->id;
      $enCar->products_id = $request->Products_id;

      $enCar->save();
*/

      return redirect('/');
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
