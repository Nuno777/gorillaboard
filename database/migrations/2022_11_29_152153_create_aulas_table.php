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
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->string('local_aulas', 50);
            $table->date('data_aulas');
            $table->unsignedBigInteger('formador_id');
            $table->unsignedBigInteger('desporto_id');
            $table->foreign('formador_id')->references('id')->on('users');
            $table->foreign('desporto_id')->references('id')->on('desportos');
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
        Schema::dropIfExists('aulas');
    }
};
