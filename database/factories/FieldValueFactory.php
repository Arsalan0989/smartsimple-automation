<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FieldValue;

class FieldValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FieldValue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'field_id' => $this->faker->numberBetween(-100000, 100000),
            'key' => $this->faker->numberBetween(-100000, 100000),
            'value' => $this->faker->numberBetween(-100000, 100000),
            'is_default' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
