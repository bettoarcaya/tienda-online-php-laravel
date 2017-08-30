<?php


  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  use App\Http\Requests;



  /**
   *Main Controller, Firts view(home) and others..
   */
  class MainController extends Controller{

    public function home(){
      # code...
      return view('main.home');
    }






  }




?>
