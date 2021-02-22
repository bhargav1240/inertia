<?php

namespace Database\Factories;

use App\Models\TimeTableInstance;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeTableInstanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TimeTableInstance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'start_time' => $this->faker->time($format = 'H:i', $max = 'now'),
            'end_time' => $this->faker->time($format = 'H:i', $max = 'now')
        ];
    }
}
