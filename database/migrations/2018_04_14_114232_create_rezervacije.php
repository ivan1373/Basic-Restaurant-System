<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezervacije extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rezervacija', function (Blueprint $table) {
          $table->increments('id');
          $table->string('br_telefona');
          $table->string('ime_prezime');
          $table->datetime('datum');
          //$table->time('vrijeme');
          $table->integer('gosti');
          $table->string('user_id');
          $table->boolean('odobrena')->default(0);
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
        //
    }
}
