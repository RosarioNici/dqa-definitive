<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonconformitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonconformita', function (Blueprint $table) {
            $table->increments('id'); // Colonna ID auto-incrementale come chiave primaria questo è il numero della non conformità
            $table->date('Data');
            //$table->unsignedBigInteger('Impianto');
            $table->enum('Tipologia', ['prodotto', 'processo']);
            $table->enum('FaseIdentificazione', ['ricevimento merci', 'produzione', 'distribuzione']);
            //$table->unsignedBigInteger('Prodotto');
            $table->string('Quantita');
            $table->string('Lotto');
            $table->date('Scadenza'); // se processo questo non va
            //$table->unsignedBigInteger('Fornitore'); // se processo questo non va
            $table->string('NumeroDDT'); // se processo questo non va

            $table->boolean('Interna')->default(true); // Valore predefinito: true
            $table->enum('Stato', ['Lavorazione', 'Analizzata', 'Chiusa']);
            $table->enum('Ugenza', ['1 NC Grave', '2 NC semplice', '3 Osservazione']);
            $table->text('AnalisiCause')->nullable(); // Testo lungo, nullable
            $table->text('CorrezioneEffettuata')->nullable(); // Testo lungo, nullable
            $table->text('AzioneCorrettiva')->nullable(); // Testo lungo, nullable
            $table->enum('VerificaSuccesso', ['si', 'no']); // se clicchi no avviamento logica di nuova apertura non conformità
            //$table->unsignedBigInteger('VerificatoDa'); // Chiave esterna per un'altra tabella
            //$table->unsignedBigInteger('Utente'); // Chiave esterna per un'altra tabella se esterna questo non va
            $table->string('UtenteEsterno'); // seintern non va se esterna si abilita

            // Chiavi esterne per le colonne "VerificatoDa" e "Utente" che fanno riferimento ad altre tabelle
            // $table->foreign('Fornitore')->references('id')->on('tabella');
            // $table->foreign('Prodotto')->references('id')->on('tabella');
            // $table->foreign('Impianto')->references('id')->on('tabella');
            // $table->foreign('VerificatoDa')->references('id')->on('tabella');
            // $table->foreign('Utente')->references('id')->on('tabella');

            $table->timestamps(); // Aggiunge automaticamente le colonne "created_at" e "updated_at"
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nonconformita');
    }
}
