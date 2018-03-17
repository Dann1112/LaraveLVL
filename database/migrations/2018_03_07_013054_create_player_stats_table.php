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
            $table->string('player');
            $table->tinyInteger('goals')->default(0)->unsigned();
            $table->tinyInteger('assists')->default(0)->unsigned();
            $table->tinyInteger('games_played')->default(0)->unsigned();
            $table->tinyInteger('yellow_cards')->default(0)->unsigned();
            $table->tinyInteger('red_cards')->default(0)->unsigned();
            $table->tinyInteger('shots')->default(0)->unsigned();
            $table->tinyInteger('shots_on_target')->default(0)->unsigned();
            $table->tinyInteger('shots_on_wood')->default(0)->unsigned();
            $table->tinyInteger('head_goals')->default(0)->unsigned();
            $table->tinyInteger('penalty_goals')->default(0)->unsigned();
            $table->tinyInteger('completed_passes')->default(0)->unsigned();
            $table->tinyInteger('key_passes')->default(0)->unsigned();
            $table->tinyInteger('succesful_crosses')->default(0)->unsigned();
            $table->tinyInteger('corner_kicks_taken')->default(0)->unsigned();
            $table->tinyInteger('tackles')->default(0)->unsigned();
            $table->tinyInteger('interceptions')->default(0)->unsigned();
            $table->tinyInteger('last_man_tackles')->default(0)->unsigned();
            $table->tinyInteger('headers_won')->default(0)->unsigned();
            $table->tinyInteger('own_goals')->default(0)->unsigned();
            $table->tinyInteger('mistakes_leading_goal')->default(0)->unsigned();
            $table->tinyInteger('conceded_penalties')->default(0)->unsigned();
            $table->tinyInteger('fouls')->default(0)->unsigned();
            $table->tinyInteger('clean_sheets_gk')->default(0)->unsigned();
            $table->tinyInteger('conceded_goals_gk')->default(0)->unsigned();
            $table->tinyInteger('saves')->default(0)->unsigned();
            $table->tinyInteger('saved_penalties')->default(0)->unsigned();
            $table->tinyInteger('1_on_1_won_gk')->default(0)->unsigned();
            $table->tinyInteger('1_on_1_lost_gk')->default(0)->unsigned();
            $table->tinyInteger('mistakes_leading_goal_gk')->default(0)->unsigned();
            $table->decimal('goals_per_match',2,2)->default(0)->unsigned();

            $table->primary('player');
            $table->foreign('player')
                    ->references('username')->on('players')
                        ->onDelete('cascade');
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
