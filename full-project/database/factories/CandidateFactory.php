<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 4,
            'full_name' => $this->faker->name,
            'Title' => $this->faker->jobTitle,
            'Resume' => $this->faker->text,
            'Skills' => $this->faker->sentence,
            'Experience' => $this->faker->sentence,
            'Education' => $this->faker->sentence,
            'nationality' => $this->faker->country,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'biography' => $this->faker->paragraph,
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced']),
            'date_of_birth' => $this->faker->date,
            'personal_website' => $this->faker->url,
            'social_link' => $this->faker->url,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'location' => $this->faker->address,
        ];
    }
}
