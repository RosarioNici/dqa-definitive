<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProdottoNonconformitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nonconformita', function (Blueprint $table) {
            $table->unsignedBigInteger('prodotto_id')->nullable();
            $table->foreign('prodotto_id')->references('id')->on('prodotto_table2');
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
