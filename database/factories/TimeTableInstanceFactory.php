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
        $date = $this->faker->date('Y-m-d', 'now');
        $start_time = $this->faker->time('H:i', 'now');
        $end_time = date('H:i', strtotime($start_time)+3600);

        return [
            'name' => $this->faker->name,
            'start_date' => $date,
            'end_date' => $date,
            'start_time' => $start_time,
            'end_time' => $end_time
        ];
    }
}
