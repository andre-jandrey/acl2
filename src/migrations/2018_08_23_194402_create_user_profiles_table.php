<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Apaga toda a tabela 
        DB::table('user_profiles')->truncate();

        Schema::create('user_profiles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('profiles_id')->unsigned();
            $table->foreign('profiles_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['id' => '1', 'name' => 'admin', 'email' => 'admin@westsoftware.com.br','password' => bcrypt('kibras2435*')],
        ]);
        
        DB::table('user_profiles')->insert([
            ['users_id' => '1', 'profiles_id' => '1'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
