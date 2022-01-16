<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AttributeValue;

class AttributeValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttributeValue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entity_id' => $this->faker->numberBetween(-100000, 100000),
            'attribute_id' => $this->faker->numberBetween(-100000, 100000),
            'key' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'value' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'is_default' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
