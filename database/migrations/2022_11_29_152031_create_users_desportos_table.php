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
        Schema::create('users_desportos', function (Blueprint $table) {
            $table->id();
            $table->integer('num_inscricoes');
            $table->integer('num_presencas');
            $table->unsignedBigInteger('desporto_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('desporto_id')->references('id')->on('desportos');
            $table->foreign('user_id')->references('id')->on('users');
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
