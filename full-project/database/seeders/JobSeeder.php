<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Retrieve all employers
        $employers = Employer::all();

        foreach ($employers as $employer) {
            for ($i = 0; $i < 10; $i++) { // Creating 10 jobs per employer
                JobListing::create([
                    'employer_id' => $employer->id,
                    'job_title' => $faker->jobTitle,
                    'tags' => json_encode($faker->words(5)),
                    'job_role' => $faker->word,
                    'min_salary' => $faker->randomFloat(2, 30000, 50000),
                    'max_salary' => $faker->randomFloat(2, 50000, 100000),
                    'salary_type' => $faker->randomElement(['Hourly', 'Weekly', 'Monthly', 'Yearly']),
                    'education' => $faker->randomElement(['High School', 'Bachelor\'s', 'Master\'s', 'PhD']),
                    'experience' => $faker->randomElement(['0-1 years', '1-3 years', '3-5 years', '5+ years']),
                    'job_type' => $faker->randomElement(['Full-Time', 'Part-Time', 'Contract', 'Temporary']),
                    'vacancies' => $faker->numberBetween(1, 10),
                    'expiration_date' => $faker->dateTimeBetween('now', '+1 year'),
                    'job_level' => $faker->randomElement(['Entry Level', 'Mid Level', 'Senior Level']),
                    'country' => $faker->country,
                    'city' => $faker->city,
                    'is_remote' => $faker->boolean,
                    'job_description' => $faker->paragraphs(3, true),
                    'job_benefits' => json_encode($faker->sentences(3)),
                ]);
            }
        }
    }
}
