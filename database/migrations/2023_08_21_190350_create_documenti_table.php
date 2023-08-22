<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documenti', function (Blueprint $table) {
            $table->id();
            $table->enum('formato_file', ['PDF', 'Word', 'XML', 'TXT']); // crea la colonna formato_file con i valori possibili
            $table->string('nome'); // crea la colonna nome di tipo stringa
            $table->boolean('validato'); // crea la colonna validato di tipo booleano
            $table->string('tipologia'); // crea la colonna tipologia di tipo stringa
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
        Schema::dropIfExists('documenti');
    }
}
