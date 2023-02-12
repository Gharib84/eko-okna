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
        Schema::create('przyjęcie_artykułs', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa_artykuł');
            $table->integer('Ilość_przyjęta');
            $table->string('Jednostka_miary', 20);
            $table->decimal('vat', 8, 2);
            $table->decimal('Cena_jednostkowa');
            $table->string('file', 255)->nullable();
            $table->decimal('total',8,2);
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
        Schema::dropIfExists('przyjęcie_artykułs');
    }
};
