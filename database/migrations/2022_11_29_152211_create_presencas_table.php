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
        Schema::create('presencas', function (Blueprint $table) {
            $table->id('id_presencas');

            $table->timestamps();

            // $table->unsignedBigInteger('id_users')->nullable();
            // $table->unsignedBigInteger('id_aulas')->nullable();

            // $table->foreign('id_users')->references('id_presencas')->on('users');
            // $table->foreign('id_aulas')->references('id_presencas')->on('aulas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presencas');
    }
};
