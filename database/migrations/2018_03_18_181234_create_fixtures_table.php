<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('competition')->nullable(false)->default('0');
            $table->unsignedTinyInteger('matchday')->nullable(true);
            $table->date('date')->nullable(false);
            $table->timeTz('time')->nullable(false);
            $table->string('home_team')->nullable(false);
            $table->integer('home_goals')->nullable(false)->default(0);
            $table->integer('away_goals')->nullable(false)->default(0);
            $table->string('away_team')->nullable(false);
            $table->string('status')->nullable(false)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixtures');
    }
}
