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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('Lieu');
            $table->string('designation');
            $table->string('Etat');
            $table->string('type');

            $table->unsignedBigInteger('user');
            $table->foreign('user')
            ->references('id')->on('users');
            
            $table->unsignedBigInteger('reparation');
            $table->foreign('reparation')
            ->references('id')->on('reparations');
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
        Schema::dropIfExists('taches');
    }
};
