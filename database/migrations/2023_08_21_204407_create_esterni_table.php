<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsterniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esterni', function (Blueprint $table) {
            $table->id();
            $table->string('RegioneSociale');
            $table->string('email');
            $table->string('Via');
            $table->string('Citta');
            $table->enum('Paese', ['Italia', 'Altra nazione']); // Aggiungi altri paesi se necessario
            $table->string('CAP')->nullable();
            $table->string('Provincia');
            $table->string('telefono');
            $table->string('rappresentante');
            $table->enum('rapposto', ['Fornitore', 'Cliente', 'Consulente']);
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
        Schema::dropIfExists('esterni');
    }
}
