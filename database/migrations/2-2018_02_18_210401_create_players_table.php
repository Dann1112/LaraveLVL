<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->string('username',20)->nullable(false);
            $table->string('email',255)->nullable(false)->default('');
            $table->string('password',255)->nullable(false)->default('');
            $table->string('remember_token',100)->nullable(true);
            $table->string('name',35)->nullable(false)->default('');
            $table->string('last_name',35)->nullable(false)->default('');
            $table->date('birth_date')->nullable(false)->default('1999-09-09');;
            $table->char('gender',1)->default('');
            $table->char('position',3)->default('');
            $table->char('second_position',3)->default('');
            $table->char('third_position',3)->default('');
            $table->unsignedTinyInteger('overall')->default(60);
            $table->unsignedTinyInteger('pace')->default(60);
            $table->unsignedTinyInteger('passing')->default(60);
            $table->unsignedTinyInteger('physical')->default(60);
            $table->unsignedTinyInteger('shooting')->default(60);
            $table->unsignedTinyInteger('dribbling')->default(60);
            $table->unsignedTinyInteger('defense')->default(60);
            $table->unsignedTinyInteger('height')->default(170);
            $table->char('nationality',2)->default('');
            $table->char('language',2)->default('');
            $table->char('strong_foot',1)->default('');
            $table->string('profile_picture',255)->nullable();
            $table->date('created_at');
            $table->date('updated_at');
            $table->softdeletes();

            $table->primary('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
