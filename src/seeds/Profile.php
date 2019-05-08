<?php
namespace Westsoft\Acl\seeds;

use Illuminate\Database\Seeder;

class Profile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            ['id' => '1', 'name' => 'admin']
        ]);
    }
}
