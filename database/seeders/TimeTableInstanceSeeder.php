<?php

namespace Database\Seeders;

use App\Models\TimeTableInstance;
use Illuminate\Database\Seeder;

class TimeTableInstanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeTableInstance::factory()
            ->count(50)
            ->create();
    }
}
