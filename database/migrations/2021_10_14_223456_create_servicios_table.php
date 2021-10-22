<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('NombreS');
            $table->string('Logo');
            $table->string('DescripcionS');
            $table->string('Latitud');
            $table->string('Longitud');
            $table->string('AtiendeS');
            $table->string('TipoS');
            $table->string('TelS');
            $table->string('WhatsappS');
            $table->string('FacebookS');
            $table->string('TwiterS');
            $table->string('InstagramS');
            $table->string('Img1S');
            $table->string('Img2S');
            $table->string('Img3S');
            $table->string('Img4S');
            $table->string('Img5S');
            $table->string('StatusS');
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
        Schema::dropIfExists('servicios');
    }
}
