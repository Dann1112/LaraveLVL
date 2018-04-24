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
            $table->Integer('competition')->nullable(false);
            $table->unsignedTinyInteger('matchday')->nullable(true);
            $table->date('date')->nullable(false);
            $table->timeTz('time')->nullable(false);
            $table->string('home_team')->nullable(false);
            $table->tinyInteger('home_goals')->nullable(false)->default(0)->unsigned();
            $table->tinyInteger('away_goals')->nullable(false)->default(0)->unsigned();
            $table->string('away_team')->nullable(false);
            $table->string('status')->nullable(false)->default(0);

            
            $table->foreign('home_team')->references('name')->on('teams');
            $table->foreign('away_team')->references('name')->on('teams');
            $table->foreign('competition')->references('idCompetitions')->on('competitions');
            

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
