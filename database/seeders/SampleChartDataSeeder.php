<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampleChartDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SampleChartData::factory()
            ->count(200)
            ->create();
    }
}
