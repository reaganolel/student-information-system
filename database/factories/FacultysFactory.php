<?php

namespace Database\Factories;

use App\Models\facultys;
use Illuminate\Database\Eloquent\Factories\Factory;

class facultysFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = facultys::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'faculty_name' => $this->faker->word,
        'faculty_code' => $this->faker->randomDigitNotNull,
        'course_code' => $this->faker->randomDigitNotNull,
        'faculty_description' => $this->faker->text,
        'faculty_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
