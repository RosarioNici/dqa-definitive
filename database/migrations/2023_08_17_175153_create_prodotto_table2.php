<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottoTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotto_table2', function (Blueprint $table) {
            $table->id();
            $table->string('Denominazione');
            $table->string('CodiceArticolo')->nullable();
            $table->string('Lotto');
            $table->decimal('Quantita', 10, 2);
            $table->enum('UnitaMisura', ['Pezzi', 'KG', 'Cartoni']);
            $table->date('Scadenza');
            $table->date('DataArrivo');
            $table->string('NumeroDDT');
            $table->enum('Tipologia', ['gelo', 'fresco', 'secco']);
            $table->string('TemperaturaScarico')->nullable();
            //$table->unsignedBigInteger('fornitore_id');
            //$table->foreign('fornitore_id')->references('id')->on('fornitori'); li inseriamo successivamente
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
        Schema::dropIfExists('prodotto_table2');
    }
}
