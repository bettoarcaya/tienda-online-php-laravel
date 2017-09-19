<?php


  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  use App\Http\Requests;

  use App\Producto;

  use app\ShoppinCart;



  /**
   *Main Controller, Firts view(home) and others..
   */
  class MainController extends Controller{

    public function home(){
      # code...
        $prod = Producto::all();
        
        $idCarrito = \Session::get('idCarrito');
        $carrito = ShoppinCart::encontrarOCrearId($idCarrito);
        \Session::put('idCarrito', $carrito->id);

      return view('main.home')->with('productos', $prod)->with('carrito', $carrito);
    }

    public function editar(){
      # code...

    }






  }




?>
