<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {

            $table->unsignedInteger('competition')->nullable(false);
            $table->unsignedInteger('team')->nullable(false);
            $table->unsignedTinyInteger('position')->nullable(false)->default(0);
            $table->unsignedTinyInteger('games_played')->nullable(false)->default(0);
            $table->unsignedTinyInteger('games_won')->nullable(false)->default(0);
            $table->unsignedTinyInteger('games_tied')->nullable(false)->default(0);
            $table->unsignedTinyInteger('games_lost')->nullable(false)->default(0);
            $table->TinyInteger('goal_difference')->nullable(false)->default(0);
            $table->unsignedTinyInteger('goals_against')->nullable(false)->default(0);
            $table->unsignedTinyInteger('goals_for')->nullable(false)->default(0);
            $table->unsignedTinyInteger('points')->nullable(false)->default(0);
            $table->string('form',1)->nullable(false)->default('0');

            $table->primary(['competition','team']);
            $table->foreign('competition')->references('id')->on('competitions');
            $table->foreign('team')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standings');
    }
}
