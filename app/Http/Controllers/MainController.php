<?php


  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  use App\Http\Requests;

  use App\Producto;



  /**
   *Main Controller, Firts view(home) and others..
   */
  class MainController extends Controller{

    public function home(){
      # code...
      return view('main.home');
    }

    public function editar(){
      # code...
        $p = Producto::find(3);

      return view('productos.editar')->with('producto', $p);
    }






  }




?>
