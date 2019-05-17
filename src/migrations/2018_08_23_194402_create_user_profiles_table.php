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
        Schema::dropIfExists('user_profiles');

        Schema::create('user_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            
            $table->unsignedBigInteger('profiles_id');
           
            $table->timestamps();
        });

        Schema::table('user_profiles', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('profiles_id')->references('id')->on('profiles');
        });



        DB::table('users')->insert([
            ['id' => '1', 'user'=>'admin', 'name' => 'admin', 'email' => 'admin@westsoftware.com.br','password' => bcrypt('kibras2435*')],
        ]);
        
        DB::table('user_profiles')->insert([
            ['user_id' => '1', 'profiles_id' => '1'],
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
