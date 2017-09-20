<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_carritos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("products_id")->unsigned();
            $table->integer("carrito_id")->unsigned();

            $table->foreign("products_id")->references("id")->on("productos");
            $table->foreign("carrito_id")->references("id")->on("shoppin_carts");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_carritos');
    }
}
