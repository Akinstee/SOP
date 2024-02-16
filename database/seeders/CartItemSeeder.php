<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $courses = [
            ['name' => 'Web Development Fundamentals', 'author' => 'John Doe', 'rating' => 4.5, 'price' => 19.99],
            ['name' => 'Digital Marketing Essentials', 'author' => 'Jane Smith', 'rating' => 4.2, 'price' => 24.99],
            ['name' => 'Python Programming for Beginners', 'author' => 'Alan Johnson', 'rating' => 4.8, 'price' => 29.99],
            ['name' => 'Social Media Marketing Mastery', 'author' => 'Emily Brown', 'rating' => 4.6, 'price' => 22.99],
            ['name' => 'JavaScript Advanced Techniques', 'author' => 'Chris Wilson', 'rating' => 4.7, 'price' => 27.99],
        ];

        foreach ($courses as $course) {
            CartItem::create($course);
        }
    }
}
