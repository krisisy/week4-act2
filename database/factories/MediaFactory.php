<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = fake()->unique()->word . '.' . fake()->fileExtension;
        $fileType = fake()->mimeType;
        return [
            'file_name' => $fileName,
            'file_type' => $fileType,
            'file_size' => fake()->numberBetween(100, 5000), // in KB
            'url' =>fake()->url,
            'upload_date' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'description' => fake()->sentence(10),
        ];
    }
}
