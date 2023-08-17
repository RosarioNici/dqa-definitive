<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotto', function (Blueprint $table) {
            $table->id();
            //$table->string('Denominazione')->required(); tolto mi dava problemi con il valore di default faccio una nuova migration
            $table->string('CodiceArticolo')->nullable();
            $table->string('Lotto')->required();
            $table->decimal('Quantita', 10, 2)->required();
            $table->enum('UnitaMisura', ['Pezzi', 'KG', 'Cartoni'])->nullable();
            $table->date('Scadenza')->required();
            $table->date('DataArrivo')->required();
            $table->string('NumeroDDT')->required();
            $table->enum('Tipologia', ['gelo', 'fresco', 'secco'])->nullable();
            $table->string('TemperaturaScarico')->required();
            //$table->unsignedBigInteger('fornitore_id')->nullable();
            //$table->foreign('fornitore_id')->references('id')->on('fornitori')->onDelete('set null');
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
        Schema::dropIfExists('prodotto');
    }
}
