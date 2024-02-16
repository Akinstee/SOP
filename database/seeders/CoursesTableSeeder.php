<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Dummy data for tech and marketing-related courses
        $courses = [
            ['name' => 'Web Development Basics', 'author' => 'John Doe', 'rating' => 4.5, 'price' => 19.99],
            ['name' => 'Digital Marketing Fundamentals', 'author' => 'Jane Smith', 'rating' => 4.2, 'price' => 24.99],
            ['name' => 'Python Programming for Beginners', 'author' => 'Alex Johnson', 'rating' => 4.8, 'price' => 29.99],
            ['name' => 'Social Media Marketing Strategies', 'author' => 'Emily Brown', 'rating' => 4.4, 'price' => 22.99],
            ['name' => 'JavaScript Advanced Techniques', 'author' => 'Chris Wilson', 'rating' => 4.7, 'price' => 27.99],
            // Add more dummy courses as needed
        ];

        // Save dummy courses to the database
        foreach ($courses as $courseData) {
            Course::create($courseData);
        }
    }
}
