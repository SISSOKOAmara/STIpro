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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('marque')->nullable();
            $table->string('model')->nullable();
            $table->string('etat');

            $table->integer('quantite')->nullable();
            $table->integer('prix_achat')->nullable();
            $table->integer('prix_vente')->nullable();
            $table->integer('benefice')->nullable();
            
            $table->date('date_achat')->nullable();
            $table->date('date_vente')->nullable();
            $table->string('note')->nullable();

            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')
            ->references('id')->on('fournisseurs')->onDelete('cascade');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('reparation_id');
            $table->foreign('reparation_id')
            ->references('id')->on('reparations')->onDelete('cascade');
            
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
        Schema::dropIfExists('produits');
    }
};
