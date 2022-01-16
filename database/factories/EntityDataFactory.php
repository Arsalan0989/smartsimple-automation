<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\EntityData;

class EntityDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EntityData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(-100000, 100000),
            'entity_id' => $this->faker->numberBetween(-100000, 100000),
            'client_id' => $this->faker->numberBetween(-100000, 100000),
            'user_id' => $this->faker->numberBetween(-100000, 100000),
            'ip' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'device' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'recordjson' => $this->faker->text,
        ];
    }
}
