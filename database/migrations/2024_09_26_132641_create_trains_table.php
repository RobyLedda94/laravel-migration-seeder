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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);  // azienda
            $table->string('departure_station', 200); // stazione di partenza
            $table->string('arrival_station', 200); // stazione di partenza
            $table->time('departure_time'); // orario di partenza
            $table->time('arrival_time'); // orario d'arrivo
            $table->string('train_code', 20); // codice treno
            $table->tinyInteger('carriage_number'); // numero di carrozze
            $table->boolean('on_time'); // indica se il treno è in orario
            $table->boolean('cancelled'); // indica se il treno è cancellato
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
        Schema::dropIfExists('trains');
    }
};
