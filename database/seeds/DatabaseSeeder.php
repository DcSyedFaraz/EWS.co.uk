<?php

use App\RefrenceStyle;
use App\Service;
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
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            WebSettingTableSeeder::class,
            ServiceTableSeeder::class,
            PaperTypeTableSeeder::class,
            AcademicLevelSeeder::class,
            DeadlineSeeder::class,
            FareSeeder::class,
            RefrenceStyleSeeder::class,
            SubjectSeeder::class,
            CountrySeeder::class,
        ]);
    }
}
