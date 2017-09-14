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
        $prod = Producto::all();
        
      return view('main.home')->with('productos', $prod);
    }

    public function editar(){
      # code...

    }






  }




?>
