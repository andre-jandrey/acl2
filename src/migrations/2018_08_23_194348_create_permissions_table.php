<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Apaga toda a tabela 
        Schema::dropIfExists('permissions');

        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150);
            $table->string('description');
            $table->timestamps();
        });

        DB::table('permissions')->insert([
            /** Inicio ALC */
            ['id' => 1, 'name' => 'profiles.index',  'description' => 'Exibir tela de perfis'],
            ['id' => 2, 'name' => 'profiles.show',   'description' => 'Exibir detalhes do perfil'],
            ['id' => 3, 'name' => 'profiles.edit',   'description' => 'Exibir tela de edição de perfil'],
            ['id' => 4, 'name' => 'profiles.create', 'description' => 'Exibir tela de cadastro de perfil'],
            ['id' => 5, 'name' => 'profiles.store',  'description' => 'Incluir novo perfil'],
            ['id' => 6, 'name' => 'profiles.update', 'description' => 'Alterar um perfil'],
            ['id' => 7, 'name' => 'profiles.destroy','description' => 'Excluir um perfil'],

            ['id' => 8, 'name' => 'permissions.index',  'description' => 'Exibir tela de permissões'],
            ['id' => 9, 'name' => 'permissions.show',   'description' => 'Exibir detalhes da permissão'],
            ['id' => 10,'name' => 'permissions.edit',   'description' => 'Exibir tela de edição de permissão'],
            ['id' => 11,'name' => 'permissions.create', 'description' => 'Exibir tela de cadastro de permissão'],
            ['id' => 12,'name' => 'permissions.store',  'description' => 'Incluir nova permissão'],
            ['id' => 13,'name' => 'permissions.update', 'description' => 'Alterar um permissão'],
            ['id' => 14,'name' => 'permissions.destroy','description' => 'Excluir um permissão'],
            
            ['id' => 15,'name' => 'profile_permissions.index',  'description' => 'Exibir tela de permissões do perfis'],
            ['id' => 16,'name' => 'profile_permissions.show',   'description' => 'Exibir detalhes das permissões do perfil'],
            ['id' => 17,'name' => 'profile_permissions.edit',   'description' => 'Exibir tela de edição das permissões do perfil'],
            ['id' => 18,'name' => 'profile_permissions.create', 'description' => 'Exibir tela de cadastro das permissões do perfil'],
            ['id' => 19,'name' => 'profile_permissions.store',  'description' => 'Incluir nova permissão do perfil'],
            ['id' => 20,'name' => 'profile_permissions.update', 'description' => 'Alterar uma permissões do perfil'],
            ['id' => 21,'name' => 'profile_permissions.destroy','description' => 'Excluir uma permissões do perfil'],

            ['id' => 22,'name' => 'user_profiles.index',  'description' => 'Exibir tela de perfis do usuário'],
            ['id' => 23,'name' => 'user_profiles.show',   'description' => 'Exibir detalhes do perfil do usuário'],
            ['id' => 24,'name' => 'user_profiles.edit',   'description' => 'Exibir tela de edição de perfil do usuário'],
            ['id' => 25,'name' => 'user_profiles.create', 'description' => 'Exibir tela de cadastro de perfil do usuário'],
            ['id' => 26,'name' => 'user_profiles.store',  'description' => 'Incluir novo perfil do usuário'],
            ['id' => 27,'name' => 'user_profiles.update', 'description' => 'Alterar um perfil do usuário'],
            ['id' => 28,'name' => 'user_profiles.destroy','description' => 'Excluir um perfil do usuário'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
