<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNonconformitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nonconformita', function (Blueprint $table) {
            $table->dropForeign(['prodotto_id']); // Assumi che la chiave esterna si chiami "prodotto_id"
            $table->dropColumn('prodotto_id'); // Rimuovi la colonna "prodotto_id"
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nonconformita', function (Blueprint $table) {
            $table->foreignId('prodotto_id')->constrained('prodotto'); // Reimposta la chiave esterna se necessario
        });
    }
}
