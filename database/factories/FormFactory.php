<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Form;

class FormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Form::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'form_scope' => $this->faker->numberBetween(-8, 8),
            'form_start_date' => $this->faker->date(),
            'has_end_date' => $this->faker->numberBetween(-8, 8),
            'form_end_date' => $this->faker->date(),
            'form_ip_access' => $this->faker->text,
            'published' => $this->faker->numberBetween(-8, 8),
            'company_id' => $this->faker->numberBetween(-100000, 100000),
            'client_id' => $this->faker->numberBetween(-100000, 100000),
        ];
    }
}
