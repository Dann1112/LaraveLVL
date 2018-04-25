<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->string('name',50)->nullable(false);
            $table->char('abbreviation',3)->nullable(false);
            $table->string('manager',50)->nullable(false);
            $table->string('comanager',50)->nullable(true);
            $table->string('streaming_channel',255)->nullable(true);
            $table->string('primary_color')->nullable(true);
            $table->string('logo')->nullable(true);
            $table->date('created_at')->nullable(true);
            $table->date('updated_at')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('twitch')->nullable(true);
            $table->string('youtube')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->unsignedTinyInteger('wins')->default(0);
            $table->unsignedTinyInteger('ties')->default(0);
            $table->unsignedTinyInteger('loses')->default(0);
            $table->unsignedTinyInteger('shots_on_target')->default(0);
            $table->unsignedTinyInteger('shots_away')->default(0);
            $table->unsignedTinyInteger('completed_passes')->default(0);
            $table->unsignedTinyInteger('failed_passes')->default(0);
            $table->unsignedTinyInteger('fouls_received')->default(0);
            $table->unsignedTinyInteger('fouls')->default(0);
            $table->unsignedTinyInteger('conceded_penalties')->default(0);
            $table->unsignedTinyInteger('goals_conceded')->default(0);

            $table->primary('name');
            $table->unique('manager');
            $table->unique('comanager');

            $table->foreign('manager')->references('username')->on('players');
            $table->foreign('comanager')->references('username')->on('players');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
