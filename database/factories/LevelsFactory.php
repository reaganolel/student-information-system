<?php

namespace Database\Factories;

use App\Models\levels;
use Illuminate\Database\Eloquent\Factories\Factory;

class levelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = levels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'level' => $this->faker->word,
        'course_id' => $this->faker->randomDigitNotNull,
        'level_description' => $this->faker->text,
        'classroom_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
