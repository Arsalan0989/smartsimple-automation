<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FormField;

class FormFieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormField::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(-100000, 100000),
            'form_id' => $this->faker->numberBetween(-100000, 100000),
            'field_id' => $this->faker->numberBetween(-100000, 100000),
            'fieldset_id' => $this->faker->numberBetween(-100000, 100000),
            'entity_id' => $this->faker->numberBetween(-100000, 100000),
            'tabindex' => $this->faker->numberBetween(-10000, 10000),
            'validations' => $this->faker->text,
        ];
    }
}
