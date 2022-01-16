<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(-100000, 100000),
            'name' => $this->faker->name,
            'organization' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'address' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'country' => $this->faker->country,
            'state' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'city' => $this->faker->city,
            'zipcode' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
        ];
    }
}
