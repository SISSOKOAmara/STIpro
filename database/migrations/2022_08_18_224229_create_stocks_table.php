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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('marque')->nullable();
            $table->string('model')->nullable();
            $table->string('motif');
            $table->string('etat');

            $table->decimal('quantite')->nullable();
            $table->decimal('QtVendu')->nullable();
            $table->decimal('QtRestant')->nullable();
            $table->decimal('prix_achat')->nullable();
            $table->decimal('prix_vente')->nullable();
            $table->decimal('benefice')->nullable();
            
            $table->date('date_achat')->nullable();
            $table->date('date_vente')->nullable();
            $table->string('remarque')->nullable();

            $table->unsignedBigInteger('appareil_id');
            $table->foreign('appareil_id')
            ->references('id')->on('appareils')->onDelete('cascade');

            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')
            ->references('id')->on('fournisseurs')->onDelete('cascade');
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
        Schema::dropIfExists('stocks');
    }
};
