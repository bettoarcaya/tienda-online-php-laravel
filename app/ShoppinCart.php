<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppinCart extends Model{
    //
  protected $fillable = ["status"];

  public function enCarrito(){
    return $this->hasMany('App\EnCarrito');
  }

  public function products(){
    return $this->belongsToMany('App\Producto','en_carritos');
  }

  public function productSize(){

    return $this->products()->count();
  }

  public static function encontrarOCrearId($shoppingC_id){

    //si $shoppinC_id no es null retornar el carrito con el id
    if ($shoppingC_id) {
      return ShoppinCart::BuscarXSession($shoppingC_id);
    }else {
      // si $shoppinC_id es null crea un carrito
      return ShoppinCart::createCarrito();
    }
  }

  public static function BuscarXSession($shoppingC_id){
    return ShoppinCart::find($shoppingC_id);
  }

  public static function createCarrito(){

    $carrito = new ShoppinCart;
    $carrito->status = 'incompleted';
    $carrito->save();

    return $carrito;
  }



}
