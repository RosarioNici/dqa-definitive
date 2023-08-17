<?php

use Illuminate\Database\Seeder;

use App\Models\nonconformita;
use Faker\ValidGenerator as Faker;

class NonconformitaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $nonconformita = new NonConformita();
            $nonconformita->Data = $faker->date();
            $nonconformita->Tipologia = $faker->randomElement(['prodotto', 'processo']);
            $nonconformita->FaseIdentificazione = $faker->randomElement(['ricevimento merci', 'produzione', 'distribuzione']);
            $nonconformita->Quantita = $faker->numberBetween(1, 1000);
            $nonconformita->Lotto = $faker->uuid;
            $nonconformita->Scadenza = $faker->dateTimeBetween('+1 week', '+2 years')->format('Y-m-d');
            $nonconformita->NumeroDDT = $faker->word;
            $nonconformita->Interna = $faker->boolean;
            $nonconformita->Stato = $faker->randomElement(['Lavorazione', 'Analizzata', 'Chiusa']);
            $nonconformita->Ugenza = $faker->randomElement(['1 NC Grave', '2 NC semplice', '3 Osservazione']);
            $nonconformita->AnalisiCause = $faker->text;
            $nonconformita->CorrezioneEffettuata = $faker->text;
            $nonconformita->AzioneCorrettiva = $faker->text;
            $nonconformita->VerificaSuccesso = $faker->randomElement(['si', 'no']);
            $nonconformita->save();
        }
    }
}
