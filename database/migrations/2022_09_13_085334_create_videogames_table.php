<?php

use App\Models\Videogame;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videogames', function (Blueprint $table) {
            $table->id('game_id');
            $table->string('game_title', 80);
            $table->integer('release_date_year');
            $table->timestamps();
        });

        Videogame::create(['game_title' => 'Valorant', 'release_date_year' => 2020]);
        Videogame::create(['game_title' => 'The Sims 4', 'release_date_year' => 2014]);
        Videogame::create(['game_title' => 'Minecraft', 'release_date_year' => 2009]);
        Videogame::create(['game_title' => 'CS:GO', 'release_date_year' => 2012]);
        Videogame::create(['game_title' => 'Life is Strange', 'release_date_year' => 2015]);
        Videogame::create(['game_title' => 'The Witcher 3', 'release_date_year' => 2015]);
        Videogame::create(['game_title' => 'F1 Manager 2022', 'release_date_year' => 2022]);
        Videogame::create(['game_title' => 'Cyperpunk 2077', 'release_date_year' => 2020]);
        Videogame::create(['game_title' => 'Rocket League', 'release_date_year' => 2015]);
        Videogame::create(['game_title' => 'Townscaper', 'release_date_year' => 2020]);
        Videogame::create(['game_title' => 'Red Dead Redemption 2', 'release_date_year' => 2018]);
        Videogame::create(['game_title' => 'Fortnite', 'release_date_year' => 2017]);
        Videogame::create(['game_title' => 'Assetto Corsa', 'release_date_year' => 2014]);
        Videogame::create(['game_title' => 'Grand Theft Auto V', 'release_date_year' => 2013]);
        Videogame::create(['game_title' => 'Grand Theft Auto: San Andreas', 'release_date_year' => 2004]);
        Videogame::create(['game_title' => 'Grand Theft Auto: Vice City', 'release_date_year' => 2002]);
        Videogame::create(['game_title' => 'Outlast 1', 'release_date_year' => 2013]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videogames');
    }
};
