<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table){
            $table->increments('id');
            $table->string ('codigo', 10)-> unique();
            $table->string ('descripcion');
            $table->tinyInteger('existencia');
            $table->decimal('precio',14,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
