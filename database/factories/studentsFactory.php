<?php

namespace Database\Factories;

use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

class studentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admission_number' => $this->faker->randomDigitNotNull,
        'first_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'email_address' => $this->faker->word,
        'course_name' => $this->faker->word,
        'year' => $this->faker->randomDigitNotNull,
        'department_name' => $this->faker->word,
        'sex' => $this->faker->word,
        'phone_number' => $this->faker->randomDigitNotNull,
        'index_number' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
