<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('Tipologia', ['Quartier Generale', 'Secondario', 'Terziario'])->nullable();
            $table->string('RagioneSociale');
            $table->string('Piva', 12);
            $table->enum('Paese', ['Italia', 'Altra nazione']); // Add other countries as needed
            $table->string('Via');
            $table->string('Citta'); // Add Italian cities or use foreign keys to reference a cities table
            $table->string('Provincia'); // Add Italian provinces or use foreign keys to reference a provinces table
            $table->string('CAP')->nullable();
            $table->string('RappresentanteLegale');
            $table->string('Telefono');
            $table->enum('Settore', ['Horeca', 'Distribuzione', 'Logistica', 'Produzione', 'Agricoltura']);
            $table->text('Descrizione')->nullable();
            $table->string('ResponsabileQualita');
            $table->string('SitoWeb')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
