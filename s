[33mcommit 48b64f66d3cd99ca68e178605dc9fb129c95a6a8[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m, [m[1;31morigin/master[m[33m)[m
Author: Daniel Manrique <juan_daniel1112@hotmail.com>
Date:   Tue Apr 24 15:46:06 2018 -0500

    Procfile for Heroku

[1mdiff --git a/Procfile b/Procfile[m
[1mindex a3e4d42..4d3ef5f 100644[m
[1m--- a/Procfile[m
[1m+++ b/Procfile[m
[36m@@ -1 +1 @@[m
[31m-web: vendor/bin/LVL-Web/ public/ [m
[32m+[m[32mweb: vendor/bin/heroku-php-apache2 public/[m[41m [m
[1mdiff --git a/composer.json b/composer.json[m
[1mindex 5f142d0..27695dc 100644[m
[1m--- a/composer.json[m
[1m+++ b/composer.json[m
[36m@@ -56,10 +56,5 @@[m
         "optimize-autoloader": true[m
     },[m
     "minimum-stability": "dev",[m
[31m-    "prefer-stable": true,[m
[31m-    "post-install-cmd": [[m
[31m-        "php artisan clear-compiled",[m
[31m-        "php artisan optimize",[m
[31m-        "chmod -R 777 public/"[m
[31m-    ][m
[32m+[m[32m    "prefer-stable": true[m
 }[m
[1mdiff --git a/database/migrations/2018_03_07_004143_create_teams_table.php b/database/migrations/2018_03_07_004143_create_teams_table.php[m
[1mindex b88656a..e607c65 100644[m
[1m--- a/database/migrations/2018_03_07_004143_create_teams_table.php[m
[1m+++ b/database/migrations/2018_03_07_004143_create_teams_table.php[m
[36m@@ -18,7 +18,7 @@[m [mclass CreateTeamsTable extends Migration[m
             $table->string('name',50);[m
             $table->char('abbreviation',3);[m
             $table->string('manager',50)->nullable(false);[m
[31m-            $table->string('comanager',50)->nullable();;[m
[32m+[m[32m            $table->string('comanager',50)->nullable(true);[m
             $table->string('streaming_channel',255)->nullable(true);[m
             $table->string('primary_color')->nullable(true);[m
             $table->string('logo')->nullable(true);[m
[36m@@ -29,9 +29,11 @@[m [mclass CreateTeamsTable extends Migration[m
             $table->string('twitch')->nullable(true);[m
             $table->string('youtube')->nullable(true);[m
             $table->string('instagram')->nullable(true);[m
[32m+[m
             $table->primary('name');[m
[31m-            $table->unique('manager');[m
[31m-            $table->unique('comanager');[m
[32m+[m[32m            $table->foreign('manager')->references('username')->on('players')->onDelete('cascade');[m
[32m+[m[32m            $table->foreign('comanager')->references('username')->on('players')->onDelete('cascade');[m
[32m+[m[41m            [m
             $table->softDeletes();[m
         });[m
     }[m
[1mdiff --git a/database/migrations/2018_03_18_181410_create_competitions_table.php b/database/migrations/2018_03_17_181134_create_competitions_table.php[m
[1msimilarity index 84%[m
[1mrename from database/migrations/2018_03_18_181410_create_competitions_table.php[m
[1mrename to database/migrations/2018_03_17_181134_create_competitions_table.php[m
[1mindex 8458739..dea2813 100644[m
[1m--- a/database/migrations/2018_03_18_181410_create_competitions_table.php[m
[1m+++ b/database/migrations/2018_03_17_181134_create_competitions_table.php[m
[36m@@ -14,13 +14,17 @@[m [mclass CreateCompetitionsTable extends Migration[m
     public function up()[m
     {[m
         Schema::create('competitions', function (Blueprint $table) {[m
[31m-            $table->increments('id');[m
[32m+[m
[32m+[m[32m            $table->increments('idCompetition');[m
             $table->string('name',50);[m
             $table->string('status',1)->nullable(false)->default(0);[m
             $table->date('start_date')->nullable(false);[m
             $table->date('end_date')->nullable(true);[m
             $table->unsignedInteger('prize')->default(0)->nullable(true);;[m
             $table->string('champion',30)->nullable(true);[m
[32m+[m
[32m+[m[32m            $table->primary('idCompetition');[m
[32m+[m[32m            $table->foreign('champion')->references('name')->on('teams');[m
             $table->softDeletes();[m
             $table->timestamps();[m
         });[m
[1mdiff --git a/database/migrations/2018_03_18_180045_create_inbox_table.php b/database/migrations/2018_03_18_180045_create_inbox_table.php[m
[1mindex 2ff07d6..0a421b5 100644[m
[1m--- a/database/migrations/2018_03_18_180045_create_inbox_table.php[m
[1m+++ b/database/migrations/2018_03_18_180045_create_inbox_table.php[m
[36m@@ -16,13 +16,17 @@[m [mclass CreateInboxTable extends Migration[m
     {[m
         Schema::create('inbox', function (Blueprint $table) {[m
             $table->increments('id');[m
[31m-            $table->timeTz('date');[m
[31m-            $table->string('from');[m
[31m-            $table->string('to');[m
[32m+[m[32m            $table->date('date');[m
[32m+[m[32m            $table->timeTz('time');[m
[32m+[m[32m            $table->string('from')->nullable(false);[m
[32m+[m[32m            $table->string('to')->nullable(false);[m
             $table->string('subject');[m
             $table->text('body');[m
[31m-            $table->timeTz('last');[m
[32m+[m[32m            $table->timeTz('seen');[m
             $table->softDeletes();[m
[32m+[m
[32m+[m[32m            $table->foreign('from')->references('username')->on('players');[m
[32m+[m[32m            $table->foreign('to')->references('username')->on('players');[m
         });[m
     }[m
 [m
[1mdiff --git a/database/migrations/2018_03_18_181234_create_fixtures_table.php b/database/migrations/2018_03_18_181234_create_fixtures_table.php[m
[1mindex 54fe05e..43d3301 100644[m
[1m--- a/database/migrations/2018_03_18_181234_create_fixtures_table.php[m
[1m+++ b/database/migrations/2018_03_18_181234_create_fixtures_table.php[m
[36m@@ -14,16 +14,24 @@[m [mclass CreateFixturesTable extends Migration[m
     public function up()[m
     {[m
         Schema::create('fixtures', function (Blueprint $table) {[m
[32m+[m
             $table->increments('id');[m
[31m-            $table->string('competition')->nullable(false)->default('0');[m
[32m+[m[32m            $table->Integer('competition')->nullable(false);[m
             $table->unsignedTinyInteger('matchday')->nullable(true);[m
             $table->date('date')->nullable(false);[m
             $table->timeTz('time')->nullable(false);[m
             $table->string('home_team')->nullable(false);[m
[31m-            $table->integer('home_goals')->nullable(false)->default(0);[m
[31m-            $table->integer('away_goals')->nullable(false)->default(0);[m
[32m+[m[32m            $table->tinyInteger('home_goals')->nullable(false)->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('away_goals')->nullable(false)->default(0)->unsigned();[m
             $table->string('away_team')->nullable(false);[m
             $table->string('status')->nullable(false)->default(0);[m
[32m+[m
[32m+[m[41m            [m
[32m+[m[32m            $table->foreign('home_team')->references('name')->on('teams');[m
[32m+[m[32m            $table->foreign('away_team')->references('name')->on('teams');[m
[32m+[m[32m            $table->foreign('competition')->references('idCompetitions')->on('competitions');[m
[32m+[m[41m            [m
[32m+[m
         });[m
     }[m
 [m
[1mdiff --git a/database/migrations/2018_03_07_013054_create_player_stats_table.php b/database/migrations/2018_03_19_013054_create_player_stats_table.php[m
[1msimilarity index 50%[m
[1mrename from database/migrations/2018_03_07_013054_create_player_stats_table.php[m
[1mrename to database/migrations/2018_03_19_013054_create_player_stats_table.php[m
[1mindex 9cfee56..13b8bf2 100644[m
[1m--- a/database/migrations/2018_03_07_013054_create_player_stats_table.php[m
[1m+++ b/database/migrations/2018_03_19_013054_create_player_stats_table.php[m
[36m@@ -14,45 +14,38 @@[m [mclass CreatePlayerStatsTable extends Migration[m
     public function up()[m
     {[m
         Schema::create('player_stats', function (Blueprint $table) {[m
[31m-            $table->string('player');[m
[31m-            $table->string('season');[m
[31m-            $table->string('team');[m
[31m-            $table->string('competition');[m
[32m+[m[32m            $table->Integer('fixture');[m
[32m+[m[32m            $table->Integer('player');[m
             $table->tinyInteger('goals')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('shots_on_target')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('shots_away')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('completed_passes')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('incompleted_passes')->default(0)->unsigned();[m
             $table->tinyInteger('assists')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('games_played')->default(0)->unsigned();[m
             $table->tinyInteger('yellow_cards')->default(0)->unsigned();[m
             $table->tinyInteger('red_cards')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('shots')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('shots_on_target')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('shots_on_wood')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('head_goals')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('penalty_goals')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('completed_passes')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('key_passes')->default(0)->unsigned();[m
             $table->tinyInteger('succesful_crosses')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('corner_kicks_taken')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('tackles')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('unsuccesful_crosses')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('fouls')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('fouls_received')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('won_tackles')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('missed_tackles')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('conceded_penalties')->default(0)->unsigned();[m
             $table->tinyInteger('interceptions')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('last_man_tackles')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('won_possesion')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('lost_possesion')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('clearances')->default(0)->unsigned();[m
             $table->tinyInteger('headers_won')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('own_goals')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('mistakes_leading_goal')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('conceded_penalties')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('fouls')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('clean_sheets_gk')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('headers_lost')->default(0)->unsigned();[m
             $table->tinyInteger('conceded_goals_gk')->default(0)->unsigned();[m
             $table->tinyInteger('saves')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('saved_penalties')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('1_on_1_won_gk')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('1_on_1_lost_gk')->default(0)->unsigned();[m
[31m-            $table->tinyInteger('mistakes_leading_goal_gk')->default(0)->unsigned();[m
[31m-            $table->decimal('goals_per_match',2,2)->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('saves_driven')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('crosses_saved')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('balls_taken')->default(0)->unsigned();[m
 [m
[31m-            $table->primary('player');[m
[31m-            $table->foreign('player')[m
[31m-                    ->references('username')->on('players')[m
[31m-                        ->onDelete('cascade');[m
[32m+[m[32m            $table->primary(array('fixture','player'));[m
[32m+[m[32m            $table->foreign('fixture')->references('id')->on('fixtures');[m
[32m+[m[32m            $table->foreign('player')->references('username')->on('players');[m
         });[m
     }[m
 [m
[1mdiff --git a/database/migrations/2018_03_30_083110_create_standings_table.php b/database/migrations/2018_03_30_083110_create_standings_table.php[m
[1mindex 06a3dcd..465e30f 100644[m
[1m--- a/database/migrations/2018_03_30_083110_create_standings_table.php[m
[1m+++ b/database/migrations/2018_03_30_083110_create_standings_table.php[m
[36m@@ -14,8 +14,8 @@[m [mclass CreateStandingsTable extends Migration[m
     public function up()[m
     {[m
         Schema::create('standings', function (Blueprint $table) {[m
[31m-            $table->increments('id');[m
[31m-            $table->string('competition')->nullable(false)->default('0');[m
[32m+[m
[32m+[m[32m            $table->Integer('competition')->nullable(false)->default('0');[m
             $table->string('team')->nullable(false);[m
             $table->unsignedTinyInteger('position')->nullable(false)->default(1);[m
             $table->unsignedTinyInteger('games_played')->nullable(false)->default(0);[m
[36m@@ -27,6 +27,10 @@[m [mclass CreateStandingsTable extends Migration[m
             $table->unsignedTinyInteger('goals_for')->nullable(false)->default(0);[m
             $table->unsignedTinyInteger('points')->nullable(false)->default(0);[m
             $table->string('form',1)->nullable(false)->default('0');[m
[32m+[m
[32m+[m[32m            $table->primary(array('competition', 'team'));[m
[32m+[m[32m            $table->foreign('competition')->references('id')->on('competitions');[m
[32m+[m[32m            $table->foreign('team')->references('name')->on('teams');[m
         });[m
     }[m
 [m
[1mdiff --git a/database/migrations/2018_04_01_194317_create_message_table.php b/database/migrations/2018_04_01_194317_create_message_table.php[m
[1mdeleted file mode 100644[m
[1mindex 90dbcef..0000000[m
[1m--- a/database/migrations/2018_04_01_194317_create_message_table.php[m
[1m+++ /dev/null[m
[36m@@ -1,31 +0,0 @@[m
[31m-<?php[m
[31m-[m
[31m-use Illuminate\Support\Facades\Schema;[m
[31m-use Illuminate\Database\Schema\Blueprint;[m
[31m-use Illuminate\Database\Migrations\Migration;[m
[31m-[m
[31m-class CreateMessageTable extends Migration[m
[31m-{[m
[31m-    /**[m
[31m-     * Run the migrations.[m
[31m-     *[m
[31m-     * @return void[m
[31m-     */[m
[31m-    public function up()[m
[31m-    {[m
[31m-        Schema::create('message', function (Blueprint $table) {[m
[31m-            $table->increments('id');[m
[31m-            $table->timestamps();[m
[31m-        });[m
[31m-    }[m
[31m-[m
[31m-    /**[m
[31m-     * Reverse the migrations.[m
[31m-     *[m
[31m-     * @return void[m
[31m-     */[m
[31m-    public function down()[m
[31m-    {[m
[31m-        Schema::dropIfExists('message');[m
[31m-    }[m
[31m-}[m
[1mdiff --git a/database/migrations/2018_04_18_000047_create_inscriptions_table.php b/database/migrations/2018_04_18_000047_create_inscriptions_table.php[m
[1mnew file mode 100644[m
[1mindex 0000000..c54c2a4[m
[1m--- /dev/null[m
[1m+++ b/database/migrations/2018_04_18_000047_create_inscriptions_table.php[m
[36m@@ -0,0 +1,37 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32muse Illuminate\Support\Facades\Schema;[m
[32m+[m[32muse Illuminate\Database\Schema\Blueprint;[m
[32m+[m[32muse Illuminate\Database\Migrations\Migration;[m
[32m+[m
[32m+[m[32mclass CreateInscriptionsTable extends Migration[m
[32m+[m[32m{[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Run the migrations.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @return void[m
[32m+[m[32m     */[m
[32m+[m[32m    public function up()[m
[32m+[m[32m    {[m
[32m+[m[32m        Schema::create('inscriptions', function (Blueprint $table) {[m
[32m+[m[32m            $table->increments('id');[m
[32m+[m[32m            $table->string('username')->nullable(false);[m
[32m+[m[32m            $table->string('team')->nullable(false);[m
[32m+[m[32m            $table->timestamps();[m
[32m+[m[32m            $table->softdeletes();[m
[32m+[m
[32m+[m[32m            $table->foreign('username')->references('username')->on('players')->onDelete('cascade');[m
[32m+[m[32m            $table->foreign('team')->references('name')->on('teams')->onDelete('cascade');[m
[32m+[m[32m        });[m
[32m+[m[32m    }[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Reverse the migrations.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @return void[m
[32m+[m[32m     */[m
[32m+[m[32m    public function down()[m
[32m+[m[32m    {[m
[32m+[m[32m        Schema::dropIfExists('inscriptions');[m
[32m+[m[32m    }[m
[32m+[m[32m}[m
[1mdiff --git a/database/migrations/2018_04_18_002007_create_team_stats_table.php b/database/migrations/2018_04_18_002007_create_team_stats_table.php[m
[1mnew file mode 100644[m
[1mindex 0000000..573cd7f[m
[1m--- /dev/null[m
[1m+++ b/database/migrations/2018_04_18_002007_create_team_stats_table.php[m
[36m@@ -0,0 +1,52 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32muse Illuminate\Support\Facades\Schema;[m
[32m+[m[32muse Illuminate\Database\Schema\Blueprint;[m
[32m+[m[32muse Illuminate\Database\Migrations\Migration;[m
[32m+[m
[32m+[m[32mclass CreateTeamStatsTable extends Migration[m
[32m+[m[32m{[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Run the migrations.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @return void[m
[32m+[m[32m     */[m
[32m+[m[32m    public function up()[m
[32m+[m[32m    {[m
[32m+[m[32m        Schema::create('team_stats', function (Blueprint $table) {[m
[32m+[m[32m            $table->Integer('fixture');[m
[32m+[m[32m            $table->string('team');[m
[32m+[m[32m            $table->tinyInteger('wins')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('ties')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('loses')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('goals')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('fouls_received')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('yellow_cards')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('red_cards')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('shots_on_target')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('shots_away')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('completed_passes')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('tackles')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('interceptions')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('headers_won')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('conceded_penalties')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('fouls')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('clean_sheets')->default(0)->unsigned();[m
[32m+[m[32m            $table->tinyInteger('conceded_goals')->default(0)->unsigned();[m
[32m+[m
[32m+[m[32m            $table->primary(array('fixture','player'));[m
[32m+[m[32m            $table->foreign('fixture')->references('id')->on('fixtures');[m
[32m+[m[32m            $table->foreign('team')->references('name')->on('teams');[m
[32m+[m[32m        });[m
[32m+[m[32m    }[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * Reverse the migrations.[m
[32m+[m[32m     *[m
[32m+[m[32m     * @return void[m
[32m+[m[32m     */[m
[32m+[m[32m    public function down()[m
[32m+[m[32m    {[m
[32m+[m[32m        Schema::dropIfExists('team_stats');[m
[32m+[m[32m    }[m
[32m+[m[32m}[m
[1mdiff --git a/resources/views/panel/player_stats.blade.php b/resources/views/panel/player_stats.blade.php[m
[1mindex 6467b3f..0725736 100644[m
[1m--- a/resources/views/panel/player_stats.blade.php[m
[1m+++ b/resources/views/panel/player_stats.blade.php[m
[36m@@ -2,19 +2,6 @@[m
 [m
 @section('option_content')[m
 [m
[31m-<ul class="nav nav-tabs" id="fixturesTab" role="tablist">[m
[31m-    <li class="nav-item">[m
[31m-      <a class="nav-link active" id="newFixture-tab" data-toggle="tab" href="#newFixture" role="tab" >@lang('panel.new')</a>[m
[31m-    </li>[m
[31m-    <li class="nav-item">[m
[31m-        <a class="nav-link" id="editFixture-tab" data-toggle="tab" href="#editFixture" role="tab">@lang('panel.edit')</a>[m
[31m-      </li>[m
[31m-      <li class="nav-item">[m
[31m-          <a class="nav-link" id="deleteFixture-tab" data-toggle="tab" href="#deleteFixture" role="tab">@lang('panel.delete')</a>[m
[31m-        </li>[m
[31m-</ul>[m
[31m-[m
[31m-<div class="tab-content" id="FixtureTabContent">[m
 [m
     <div class="tab-pane fade show active" id="newFixture" role="tabpanel" aria-labelledby="tab-fixture">[m
         <hr class="border" style="color:white">[m
[36m@@ -24,7 +11,7 @@[m
         @include('layouts.errors')[m
 [m
 [m
[31m-      <form class="text-center" method="POST" action="{{route('fixtures')}}" enctype="multipart/form-data">[m
[32m+[m[32m      <form class="text-center" method="POST" action="{{route('player_stats')}}" enctype="multipart/form-data">[m
 [m
         {{csrf_field()}}[m
 [m
[1mdiff --git a/routes/web.php b/routes/web.php[m
[1mindex 268cce7..d692411 100644[m
[1m--- a/routes/web.php[m
[1m+++ b/routes/web.php[m
[36m@@ -1,6 +1,6 @@[m
 <?php[m
 [m
[31m-Route::get('/','PlayerController@showAll')->name('home');[m
[32m+[m[32mRoute::get('/','RegistrationController@create')->name('home');[m
 [m
 Route::get('/search','PlayerController@showAll')->name('players');[m
 Route::get('/search/results','PlayerController@search')->name('search_results');[m
