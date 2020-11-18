<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');// Tenemos que ver cual es la longitud maxima para que cuando se suba un titulo no se desborde. Por ahora por defecto es de 255.
            $table->text('image');//Esto estará como la url de donde estará la imagen de la news. Tenemos que ver si al final superará los 255 caracteres porque, si no, tenemos que cambiarlo a text()
            $table->text('description'); // Igual que los demás, ver la longitud de la description para que no se desborde
            $table->text('url'); // text te permite un poco mása de 60mil caracteres así que esto estará bien. Si se ve que necesitamos más podemos cambiarlo a longText, que según lo que encontré, permite como 4millones de catacteres (como máximo)
            $table->foreignId('entity_id')->constrained(); // Hay que poner otro nombre porque no solo abarca a los capitulos (paises), si no, también a 'ILAEF' y 'LATAM'
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
        Schema::dropIfExists('news');
    }
}
