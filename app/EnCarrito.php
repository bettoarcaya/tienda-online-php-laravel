<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnCarrito extends Model{

  protected $fillable = ['carrito_id', 'products_id'];


  public function obtenerCantProduct(){

    $cantidad = count(EnCarrito::all());

    return $cantidad;
  }


}
