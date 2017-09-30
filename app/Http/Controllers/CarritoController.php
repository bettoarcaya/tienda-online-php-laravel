<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppinCart;
use App\EnCarrito;
use App\Producto;

class CarritoController extends Controller{

  public function index(){

    /*
    Usando Variables de Session (otra forma)...
    $idCarrito = \Session::get('idCarrito');
    //dd($idCarrito);
    $carrito = ShoppinCart::encontrarOCrearId($idCarrito);
    //dd($carrito);

  \Session::put('idCarrito', $carrito->id);

    $productos = $carrito->products()->get();
    //obtenemos los datos en forma de arreglo gracias al metodo get.

    //$total = $carrito->total();
    */
    
    $total = 0;
    $carrito = EnCarrito::all();
    $arreglo = array();

    for ($i = 0; $i < count($carrito); $i++) {
      $productos = Producto::find($carrito[$i]->products_id);
      array_push($arreglo, $productos);
      $total += $productos->precio;
    }

    //dd($arr);
    return view('productos.carrito')->with('productos', $arreglo)->with('total', $total);
  }




}
