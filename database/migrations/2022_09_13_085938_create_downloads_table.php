<?php

use App\Models\Download;
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
        Schema::create('downloads', function (Blueprint $table) {
            $table->id('download_id');
            $table->foreignId('player')->references('user_id')->on('users');
            $table->foreignId('game')->references('game_id')->on('videogames');

            $table->timestamps();
        });

        Download::create(['player' => 1, 'game' => 1]);
        Download::create(['player' => 1, 'game' => 3]);
        Download::create(['player' => 1, 'game' => 4]);
        Download::create(['player' => 1, 'game' => 7]);
        Download::create(['player' => 1, 'game' => 9]);
        Download::create(['player' => 1, 'game' => 13]);
        Download::create(['player' => 1, 'game' => 14]);
        Download::create(['player' => 1, 'game' => 15]);
        Download::create(['player' => 2, 'game' => 1]);
        Download::create(['player' => 2, 'game' => 3]);
        Download::create(['player' => 2, 'game' => 14]);
        Download::create(['player' => 2, 'game' => 17]);
        Download::create(['player' => 2, 'game' => 12]);
        Download::create(['player' => 3, 'game' => 14]);
        Download::create(['player' => 3, 'game' => 11]);
        Download::create(['player' => 4, 'game' => 1]);
        Download::create(['player' => 4, 'game' => 2]);
        Download::create(['player' => 4, 'game' => 3]);
        Download::create(['player' => 4, 'game' => 5]);
        Download::create(['player' => 4, 'game' => 10]);
        Download::create(['player' => 5, 'game' => 12]);
        Download::create(['player' => 5, 'game' => 2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downloads');
    }
};
