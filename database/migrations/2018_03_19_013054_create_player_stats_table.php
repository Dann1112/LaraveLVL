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
            $table->Integer('fixture');
            $table->Integer('player');
            $table->tinyInteger('goals')->default(0)->unsigned();
            $table->tinyInteger('shots_on_target')->default(0)->unsigned();
            $table->tinyInteger('shots_away')->default(0)->unsigned();
            $table->tinyInteger('completed_passes')->default(0)->unsigned();
            $table->tinyInteger('incompleted_passes')->default(0)->unsigned();
            $table->tinyInteger('assists')->default(0)->unsigned();
            $table->tinyInteger('yellow_cards')->default(0)->unsigned();
            $table->tinyInteger('red_cards')->default(0)->unsigned();
            $table->tinyInteger('succesful_crosses')->default(0)->unsigned();
            $table->tinyInteger('unsuccesful_crosses')->default(0)->unsigned();
            $table->tinyInteger('fouls')->default(0)->unsigned();
            $table->tinyInteger('fouls_received')->default(0)->unsigned();
            $table->tinyInteger('won_tackles')->default(0)->unsigned();
            $table->tinyInteger('missed_tackles')->default(0)->unsigned();
            $table->tinyInteger('conceded_penalties')->default(0)->unsigned();
            $table->tinyInteger('interceptions')->default(0)->unsigned();
            $table->tinyInteger('won_possesion')->default(0)->unsigned();
            $table->tinyInteger('lost_possesion')->default(0)->unsigned();
            $table->tinyInteger('clearances')->default(0)->unsigned();
            $table->tinyInteger('headers_won')->default(0)->unsigned();
            $table->tinyInteger('headers_lost')->default(0)->unsigned();
            $table->tinyInteger('conceded_goals_gk')->default(0)->unsigned();
            $table->tinyInteger('saves')->default(0)->unsigned();
            $table->tinyInteger('saves_driven')->default(0)->unsigned();
            $table->tinyInteger('crosses_saved')->default(0)->unsigned();
            $table->tinyInteger('balls_taken')->default(0)->unsigned();

            $table->primary(array('fixture','player'));
            $table->foreign('fixture')->references('id')->on('fixtures');
            $table->foreign('player')->references('username')->on('players');
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
