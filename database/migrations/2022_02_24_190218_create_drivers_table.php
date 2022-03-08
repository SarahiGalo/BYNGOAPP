<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_drivers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('app', 255);
            $table->string('apm', 255);
            $table->string('calle');
            $table->string('colonia');
            $table->string('municipio');
            $table->integer('numc');
            $table->string('del');
            $table->text('tel');
            $table->text('email');
            $table->text('email2');
            $table->string('pass1', 18);
            $table->string('pass2', 18);
            $table->string('curp', 18);
            $table->string('licencia');
            $table->text('piclicen');
            $table->string('transporte');
            $table->text('picrep');
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
        Schema::dropIfExists('drivers');
    }
};
