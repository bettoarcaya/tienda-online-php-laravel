<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ShoppinCart;
use App\EnCarrito;


class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
      //con esto inyectamos la session en todas las vistas de nuestro proyecto
      view()->composer("*",function($view){
        $idCarrito = \Session::get('idCarrito');
        $carrito = ShoppinCart::encontrarOCrearId($idCarrito);
      \Session::put('idCarrito', $carrito->id);

      $cantidad = new EnCarrito;


        //$view->with("cantidad", $carrito->productSize());
        $view->with("cantidad", $cantidad->obtenerCantProduct());

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
