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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('Etat');
            $table->string('type');

            $table->unsignedBigInteger('tache');
            $table->foreign('tache')
            ->references('id')->on('taches');

            $table->unsignedBigInteger('appareil');
            $table->foreign('appareil')
            ->references('id')->on('appareils');
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
        Schema::dropIfExists('maintenances');
    }
};
