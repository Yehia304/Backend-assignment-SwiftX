<?php

namespace Database\Seeders;

use App\Models\JoggingTime;
use Illuminate\Database\Seeder;

class JoggingTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JoggingTime::factory( 50)->create();
    }
}
