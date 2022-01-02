<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("person");
            $table->string("facebook");
            $table->string("website");
            $table->string("icon");
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
        Schema::dropIfExists('tracks');
    }
}
