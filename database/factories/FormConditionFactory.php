<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FormCondition;

class FormConditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormCondition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'form_field_id' => $this->faker->numberBetween(-100000, 100000),
            'condition_operator' => $this->faker->word,
            'target_form_field_id' => $this->faker->numberBetween(-100000, 100000),
            'target_form_field_value' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
        ];
    }
}
