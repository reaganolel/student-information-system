<?php

namespace Database\Factories;

use App\Models\class_schedullings;
use Illuminate\Database\Eloquent\Factories\Factory;

class class_schedullingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = class_schedullings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->randomDigitNotNull,
        'level_id' => $this->faker->randomDigitNotNull,
        'shift_id' => $this->faker->randomDigitNotNull,
        'classroom_id' => $this->faker->word,
        'batch_id' => $this->faker->word,
        'day_id' => $this->faker->word,
        'time_id' => $this->faker->word,
        'teacher_id' => $this->faker->word,
        'start_time' => $this->faker->word,
        'end_time' => $this->faker->word,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
