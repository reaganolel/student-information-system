<?php

namespace Database\Factories;

use App\Models\transactions;
use Illuminate\Database\Eloquent\Factories\Factory;

class transactionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transactions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomDigitNotNull,
        'fee_id' => $this->faker->randomDigitNotNull,
        'user_id' => $this->faker->randomDigitNotNull,
        'paid' => $this->faker->randomDigitNotNull,
        'transaction_date' => $this->faker->word,
        'remarks' => $this->faker->text,
        'description' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
