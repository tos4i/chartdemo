<?php

namespace Database\Factories;

use App\Models\SampleChartData;
use Illuminate\Database\Eloquent\Factories\Factory;

class SampleChartDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SampleChartData::class;
    static $delta = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'xAxis' => SampleChartDataFactory::$delta++,
            'yAxis' => $this->faker->numberBetween($min = 1000, $max = 9000),
        ];
    }
}
