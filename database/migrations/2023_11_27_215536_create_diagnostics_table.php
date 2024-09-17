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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('etat')->nullable();
            $table->integer('prix')->nullable();
            $table->integer('paye')->nullable();

            $table->unsignedBigInteger('reparation_id');
            $table->foreign('reparation_id')
            ->references('id')->on('reparations')->onDelete('cascade');

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
        Schema::dropIfExists('diagnostics');
    }
};
