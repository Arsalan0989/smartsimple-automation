<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Entity;

class EntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => $this->faker->numberBetween(-100000, 100000),
            'involve_client' => $this->faker->numberBetween(-8, 8),
            'has_childs' => $this->faker->numberBetween(-8, 8),
            'heading' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'slug' => $this->faker->slug,
            'icon' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'description' => $this->faker->text,
            'menu_title' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'show_in_menu' => $this->faker->numberBetween(-8, 8),
            'published' => $this->faker->numberBetween(-8, 8),
            'company_id' => $this->faker->numberBetween(-100000, 100000),
        ];
    }
}
