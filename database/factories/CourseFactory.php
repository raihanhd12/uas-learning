<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,3)), 
            'excerpt' => $this->faker->sentence(mt_rand(1,1)),           
            'excerptitle' => $this->faker->sentence(mt_rand(1,1)),           
            'learn' => $this->faker->paragraph(),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'course_level_id' => mt_rand(1,2),
            'course_price_id' => mt_rand(1,2),
            'instructor_id' => mt_rand(1,5),
            'course_category_id' => mt_rand(1,6)
        ];
    }
}
