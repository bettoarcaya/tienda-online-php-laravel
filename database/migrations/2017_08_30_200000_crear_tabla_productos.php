<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //creamos la tabla con los siguientes valores
      Schema::create('productos',function(Blueprint $table){
        $table->increments('id');

        $table->integer('user_id')->unsigned()->index();//lo vinculamos a un usuario en la tabla user
        $table->string('title');
        $table->text('description');
        $table->decimal('precio', 9, 2);//cifras de 9 digitos donde 2 de ellos son los decimales

        $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        //borrar la tabla en el caso de querer revertir los cambios
      Schema::drop('productos');
    }
}
