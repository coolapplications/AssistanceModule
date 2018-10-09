<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Group extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer("couch_id")->unsigned();
            $table->foreign("couch_id")->references("id")->on("couch");
            $table->integer("athlete_id")->unsigned();
            $table->foreign("athlete_id")->references("id")->on("athlete");
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
        Schema::drop('group');

    }
}
