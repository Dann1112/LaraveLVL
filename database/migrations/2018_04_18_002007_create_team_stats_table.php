<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_stats', function (Blueprint $table) {
            $table->Integer('fixture');
            $table->string('team');
            $table->tinyInteger('wins')->default(0)->unsigned();
            $table->tinyInteger('ties')->default(0)->unsigned();
            $table->tinyInteger('loses')->default(0)->unsigned();
            $table->tinyInteger('goals')->default(0)->unsigned();
            $table->tinyInteger('fouls_received')->default(0)->unsigned();
            $table->tinyInteger('yellow_cards')->default(0)->unsigned();
            $table->tinyInteger('red_cards')->default(0)->unsigned();
            $table->tinyInteger('shots_on_target')->default(0)->unsigned();
            $table->tinyInteger('shots_away')->default(0)->unsigned();
            $table->tinyInteger('completed_passes')->default(0)->unsigned();
            $table->tinyInteger('tackles')->default(0)->unsigned();
            $table->tinyInteger('interceptions')->default(0)->unsigned();
            $table->tinyInteger('headers_won')->default(0)->unsigned();
            $table->tinyInteger('conceded_penalties')->default(0)->unsigned();
            $table->tinyInteger('fouls')->default(0)->unsigned();
            $table->tinyInteger('clean_sheets')->default(0)->unsigned();
            $table->tinyInteger('conceded_goals')->default(0)->unsigned();

            $table->primary(array('fixture','player'));
            $table->foreign('fixture')->references('id')->on('fixtures');
            $table->foreign('team')->references('name')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_stats');
    }
}
