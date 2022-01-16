<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Field;

class FieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Field::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(-100000, 100000),
            'heading' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'field_type' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
