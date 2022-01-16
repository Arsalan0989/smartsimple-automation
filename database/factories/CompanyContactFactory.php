<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyContact;

class CompanyContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(-100000, 100000),
            'contact_type' => $this->faker->randomElement(["Email","Phone","URL"]),
            'contact_value' => $this->faker->randomElement(["Email","Phone","URL"]),
        ];
    }
}
