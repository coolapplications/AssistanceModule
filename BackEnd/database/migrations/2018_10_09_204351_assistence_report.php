<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssistenceReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistance', function(Blueprint $table){
            $table->increments('id');
            $table->integer("athlete_id")->unsigned();
            $table->foreign("athlete_id")->references("id")->on("athlete");
            $table->date('date');
            $table->boolean('assisted');
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
        Schema::dropIfExists('assistance');

    }
}
