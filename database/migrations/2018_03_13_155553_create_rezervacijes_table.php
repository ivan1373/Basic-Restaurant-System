<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezervacijesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacijes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->integer('broj_gostiju');
            $table->integer('telefon');
            $table->date('datum');
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
        Schema::dropIfExists('rezervacijes');
    }
}
