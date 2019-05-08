<?php
namespace Westsoft\Acl\seeds;

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => '1', 'name' => 'admin', 'email' => 'admin@westsoftware.com.br','password' => bcrypt('kibras2435*')],
        ]);
    }
}
