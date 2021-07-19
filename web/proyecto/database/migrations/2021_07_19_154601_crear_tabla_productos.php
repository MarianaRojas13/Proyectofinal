<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",150);
            $table->integer("precio");
            $table->integer("stock");
            $table->string("tipo",50);
            $table->timestamps();
        });
    }/*cada ves que se crea un migrate hay qye hacer un migrate en atach cshel, php artisan migrate */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
