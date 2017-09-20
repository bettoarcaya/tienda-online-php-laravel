<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ShoppinCart;


class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
      view()->composer("*",function($view){
        $idCarrito = \Session::get('idCarrito');
        $carrito = ShoppinCart::encontrarOCrearId($idCarrito);
        \Session::put('idCarrito', $carrito->id);

        $view->with("carrito",$carrito);
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
