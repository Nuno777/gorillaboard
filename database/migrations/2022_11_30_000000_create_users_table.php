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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('perms')->nullable()->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->string('categoria_users')->nullable();
            $table->string('cartao_cidadao_users')->nullable();
            $table->unsignedBigInteger('atletas_id')->nullable();
            $table->unsignedBigInteger('aulas_id')->nullable();
            $table->foreign('atletas_id')->references('id')->on('atletas');
            $table->foreign('aulas_id')->references('id')->on('aulas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
