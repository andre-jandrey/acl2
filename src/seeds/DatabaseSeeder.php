<?php

namespace Westsoft\Acl\seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            User::class,
            Permission::class,
            Profile::class,
            ProfilePermition::class,
            UserProfile::class,
            ]
        );
    }
}
