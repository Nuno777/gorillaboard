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
        Schema::create('inscricao_aulas', function (Blueprint $table) {
            $table->id('id_inscri_aulas');
            $table->string('id_users')->foreign('id_users')->references('id')->on('users');
            $table->string('id_desportos')->foreign('id_desportos')->references('id')->on('desportos');
            $table->string('quant_inscri_aulas');
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
        Schema::dropIfExists('inscricao_aulas');
    }
};
