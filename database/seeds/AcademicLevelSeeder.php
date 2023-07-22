<?php

use App\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicLevel::insert([[
            'name'=>'A Level / College'
        ],
        [
            'name'=> 'Undergraduate / Diploma'
        ],
        [
            'name'=> "Master's"
        ],
        [
            'name'=> 'Mphil and PHD'
        ],
        
    ]);
}
}
