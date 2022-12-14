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
            $table->string('marque');
            $table->string('model')->nullable();
            $table->string('motif');
            $table->string('etat')->nullable();
            $table->string('note')->nullable();
            $table->string('accessoire')->nullable();

            $table->string('panne')->nullable();
            $table->integer('prix')->nullable();
            $table->integer('paye')->nullable();
            $table->integer('restant')->nullable();
            $table->date('rdv')->nullable();
            $table->date('date_retrait')->nullable();
            $table->string('remarque')->nullable();

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
            ->references('id')->on('clients')->onDelete('cascade');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')
            ->references('id')->on('categories')->onDelete('cascade');
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
