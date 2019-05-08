<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Apaga toda a tabela de usuários
        DB::table('profiles')->truncate();

        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('profiles')->insert([
            ['id' => '1', 'name' => 'admin']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
