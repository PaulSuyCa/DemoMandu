<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisiones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',45);
            $table->integer('Dsup_id')->nullable();
            $table->string('nombre_Dsup')->nullable();
            $table->integer('num_subd')->nullable();
            $table->integer('nivel');
            $table->integer('cantidad');
            $table->string('embajador');
            $table->char('estado',1)->comment('0-Inactivo/1-Activo')->default(1);
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
        Schema::dropIfExists('divisiones');
    }
}
