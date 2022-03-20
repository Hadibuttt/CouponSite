<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ExtensionUser;
use App\Models\Website;
use App\Models\Coupon;
use App\Models\UserSupport;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2000)->create();
        ExtensionUser::factory(2000)->create();
        Website::factory(2000)->create();
        Coupon::factory(2000)->create();
        UserSupport::factory(2000)->create();
    }
}
