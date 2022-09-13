<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });

        User::create(['name' => 'Vitay Zalán', 'email' => 'zacsikamacsika@hotmail.com']);
        User::create(['name' => 'Vetési György Ádám', 'email' => 'gyurcusmurcus@diakocska.edu']);
        User::create(['name' => 'Weinberger Péter', 'email' => 'petikemetike@petermail.hu']);
        User::create(['name' => 'Rohácsi Daniella', 'email' => 'dancuskah@xd.com']);
        User::create(['name' => 'Szundi Kata', 'email' => 'ebreszto@almosvok.ZzZ']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
