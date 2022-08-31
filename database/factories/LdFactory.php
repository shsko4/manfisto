<?php

namespace Database\Factories;

use App\Models\Ld;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ld>
 */
class LdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ld::class;
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
        return [
            'name'      =>  $this->faker->name,
            'email'     =>  $this->faker->unique()->safeEmail,
            'gender'    =>  $gender
        ];
    }
}
