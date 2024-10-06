<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Pavadinimas
            $table->text('description'); // Aprašymas
            $table->date('date'); // Data
            $table->string('location'); // Vieta
            $table->timestamps(); // Sukūrimo ir atnaujinimo laikai
        });
    }

    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
