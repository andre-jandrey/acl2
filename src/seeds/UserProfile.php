<?php
namespace Westsoft\Acl\seeds;

use Illuminate\Database\Seeder;

class UserProfile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->insert([
            ['user_id' => '1', 'profiles_id' => '1'],
        ]);
    }
}
