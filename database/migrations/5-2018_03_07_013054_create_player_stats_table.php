<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_stats', function (Blueprint $table) {

                        $table->increments('id');
                        $table->unsignedInteger('fixture');
                        $table->string('player');
                        $table->unsignedInteger('team');
                        $table->unsignedTinyInteger('goals')->default(0);
                        $table->unsignedTinyInteger('shots_on_target')->default(0);
                        $table->unsignedTinyInteger('shots_away')->default(0);
                        $table->unsignedTinyInteger('assists')->default(0);
                        $table->unsignedTinyInteger('completed_passes')->default(0);
                        $table->unsignedTinyInteger('failed_passes')->default(0);
                        $table->unsignedTinyInteger('completed_crosses')->default(0);
                        $table->unsignedTinyInteger('failed_crosses')->default(0);
                        $table->unsignedTinyInteger('fouls_received')->default(0);
                        $table->unsignedTinyInteger('won_tackles')->default(0);
                        $table->unsignedTinyInteger('failed_tackles')->default(0);
                        $table->unsignedTinyInteger('yellow_cards')->default(0);
                        $table->unsignedTinyInteger('red_cards')->default(0);
                        $table->unsignedTinyInteger('fouls')->default(0);
                        $table->unsignedTinyInteger('conceded_penalties')->default(0);
                        $table->unsignedTinyInteger('interceptions')->default(0);
                        $table->unsignedTinyInteger('blocks')->default(0);
                        $table->unsignedTinyInteger('won_posession')->default(0);
                        $table->unsignedTinyInteger('lost_posession')->default(0);
                        $table->unsignedTinyInteger('clearances')->default(0);
                        $table->unsignedTinyInteger('won_headers')->default(0);
                        $table->unsignedTinyInteger('lost_headers')->default(0);
                        $table->unsignedTinyInteger('goals_conceded_gk')->default(0);
                        $table->unsignedTinyInteger('shots_caught_gk')->default(0);
                        $table->unsignedTinyInteger('shots_driven_gk')->default(0);
                        $table->unsignedTinyInteger('crosses_caught_gk')->default(0);
                        $table->unsignedTinyInteger('balls_taken_gk')->default(0);
                        
             
                        $table->foreign('fixture')->references('id')->on('fixtures')->onDelete('cascade');
                        $table->foreign('player')->references('username')->on('players')->onDelete('cascade');
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
        Schema::dropIfExists('player_stats');
    }
}
