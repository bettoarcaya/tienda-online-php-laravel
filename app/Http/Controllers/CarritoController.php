<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppinCart;

class CarritoController extends Controller{

  public function index(){

    $idCarrito = \Session::get('idCarrito');
    $carrito = ShoppinCart::encontrarOCrearId($idCarrito);
    \Session::put('idCarrito', $carrito->id);

    $productos = $carrito->products()->get();

    $total = $carrito->total();


    return view('productos.carrito')->with('productos', $productos)->with('total', $total);
  }




}
