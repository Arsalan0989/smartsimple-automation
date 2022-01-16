<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\EntityDataValue;

class EntityDataValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EntityDataValue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entity_data_id' => $this->faker->numberBetween(-100000, 100000),
            'entity_id' => $this->faker->numberBetween(-100000, 100000),
            'attribute_id' => $this->faker->numberBetween(-100000, 100000),
            'attribute_value_id' => $this->faker->numberBetween(-100000, 100000),
            'attribute_entity_value' => $this->faker->text,
            'attribute_string_value' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'attribute_int_value' => $this->faker->numberBetween(-10000, 10000),
            'attribute_min_int_value' => $this->faker->numberBetween(-10000, 10000),
            'attribute_max_int_value' => $this->faker->numberBetween(-10000, 10000),
            'attribute_float_value' => $this->faker->randomFloat(2, 0, 99999999.99),
            'attribute_min_float_value' => $this->faker->randomFloat(2, 0, 99999999.99),
            'attribute_max_float_value' => $this->faker->randomFloat(2, 0, 99999999.99),
            'attribute_text_value' => $this->faker->text,
            'attribute_date_value' => $this->faker->date(),
            'attribute_time_value' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'attribute_datetime_value' => $this->faker->dateTime(),
            'attribute_min_date_value' => $this->faker->date(),
            'attribute_max_date_value' => $this->faker->date(),
            'attribute_min_datetime_value' => $this->faker->date(),
            'attribute_max_datetime_value' => $this->faker->date(),
            'attribute_min_time_value' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'attribute_max_time_value' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
