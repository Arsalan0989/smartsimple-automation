<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(-100000, 100000),
            'name' => $this->faker->name,
            'logo' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'about' => $this->faker->text,
            'services' => $this->faker->text,
        ];
    }
}
