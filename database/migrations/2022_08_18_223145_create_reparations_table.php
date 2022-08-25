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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('marque');
            $table->string('model')->nullable();
            $table->string('motif');
            $table->string('etat')->nullable();
            $table->string('note')->nullable();

            $table->string('panne')->nullable();
            $table->decimal('prix')->nullable();
            $table->decimal('paye')->nullable();
            $table->decimal('restant')->nullable();
            $table->date('rdv')->nullable();
            $table->date('date_retrait')->nullable();
            $table->string('remarque')->nullable();

            $table->unsignedBigInteger('appareil');
            $table->foreign('appareil')
            ->references('id')
            ->on('appareils');

            $table->unsignedBigInteger('client');
            $table->foreign('client')
            ->references('id')->on('clients');
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
        Schema::dropIfExists('reparations');
    }
};
