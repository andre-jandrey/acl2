<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilePermissionsTable extends Migration
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
        
        Schema::create('profile_permissions', function (Blueprint $table) {
            $table->integer('permissions_id')->unsigned();
            $table->foreign('permissions_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->integer('profiles_id')->unsigned();
            $table->foreign('profiles_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('profile_permissions')->insert([
            ['profiles_id' => '1', 'permissions_id' => '1'],
            ['profiles_id' => '1', 'permissions_id' => '2'],
            ['profiles_id' => '1', 'permissions_id' => '3'],
            ['profiles_id' => '1', 'permissions_id' => '4'],
            ['profiles_id' => '1', 'permissions_id' => '5'],
            ['profiles_id' => '1', 'permissions_id' => '6'],
            ['profiles_id' => '1', 'permissions_id' => '7'],
            ['profiles_id' => '1', 'permissions_id' => '8'],
            ['profiles_id' => '1', 'permissions_id' => '9'],
            ['profiles_id' => '1', 'permissions_id' => '10'],
            ['profiles_id' => '1', 'permissions_id' => '11'],
            ['profiles_id' => '1', 'permissions_id' => '12'],
            ['profiles_id' => '1', 'permissions_id' => '13'],
            ['profiles_id' => '1', 'permissions_id' => '14'],
            ['profiles_id' => '1', 'permissions_id' => '15'],
            ['profiles_id' => '1', 'permissions_id' => '16'],
            ['profiles_id' => '1', 'permissions_id' => '17'],
            ['profiles_id' => '1', 'permissions_id' => '18'],
            ['profiles_id' => '1', 'permissions_id' => '19'],
            ['profiles_id' => '1', 'permissions_id' => '20'],
            ['profiles_id' => '1', 'permissions_id' => '21'],
            ['profiles_id' => '1', 'permissions_id' => '22'],
            ['profiles_id' => '1', 'permissions_id' => '23'],
            ['profiles_id' => '1', 'permissions_id' => '24'],
            ['profiles_id' => '1', 'permissions_id' => '25'],
            ['profiles_id' => '1', 'permissions_id' => '26'],
            ['profiles_id' => '1', 'permissions_id' => '27'],
            ['profiles_id' => '1', 'permissions_id' => '28'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_permissions');
    }
}
