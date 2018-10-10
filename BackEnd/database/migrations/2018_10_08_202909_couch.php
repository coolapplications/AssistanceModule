<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Couch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couch', function(Blueprint $table){
            $table->increments('id');
            $table->string("name");
            $table->string("dni");
            $table->timestamps();
        });
        Schema::table('couch', function (Blueprint $table){
            $table->integer("group_id")->unsigned();
            $table->foreign("group_id")->references("id")->on("group");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couch');
    }
}
