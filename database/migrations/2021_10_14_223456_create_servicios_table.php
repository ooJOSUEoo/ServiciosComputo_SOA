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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('NombreS', 100);
            $table->string('Logo');
            $table->text('DescripcionS');
            $table->string('Latitud');
            $table->string('Longitud');
            $table->string('AtiendeS');
            $table->string('TipoS');
            $table->string('TelS');
            $table->string('WhatsappS')->nullable();
            $table->string('FacebookS')->nullable();
            $table->string('TwiterS')->nullable();
            $table->string('InstagramS')->nullable();
            $table->string('EmailS')->nullable();
            $table->string('Img1S');
            $table->string('Img2S');
            $table->string('Img3S');
            $table->string('Img4S');
            $table->string('Img5S');
            $table->bigInteger('IdUsuario')->unsigned();
            $table->string('StatusS');
            $table->timestamps();

            $table->foreign('IdUsuario')->references('id')->on('users')->onDelete('cascade');
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
