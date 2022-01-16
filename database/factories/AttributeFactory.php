<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attribute;

class AttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attribute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entity_id' => $this->faker->numberBetween(-100000, 100000),
            'slug' => $this->faker->slug,
            'attribute_type' => $this->faker->numberBetween(-8, 8),
            'has_options' => $this->faker->numberBetween(-8, 8),
            'options_source' => $this->faker->numberBetween(-8, 8),
            'options_source_file' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'options_source_json' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'options_source_api' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'options_source_key' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'options_source_value' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'options_entity_id' => $this->faker->numberBetween(-100000, 100000),
            'validation_json' => $this->faker->text,
            'published' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
