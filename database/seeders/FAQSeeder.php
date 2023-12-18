<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        FAQ::create([
            'question' => 'What is SOPS?',
            'answer' => 'SOPS is an online learning management system.',
        ]);

        FAQ::create([
            'question' => 'How can I enroll in a course?',
            'answer' => 'You can enroll in a course by visiting the course page and clicking the "Enroll" button.',
        ]);

        FAQ::create([
            'question' => 'Is there a mobile app?',
            'answer' => 'Yes, we have a mobile app available for download on iOS and Android.',
        ]);

        FAQ::create([
            'question' => 'How do I reset my password?',
            'answer' => 'You can reset your password by clicking on the "Forgot Password" link on the login page.',
        ]);

        FAQ::create([
            'question' => 'Can I download course materials?',
            'answer' => 'Yes, you can download course materials from the course resources section.',
        ]);
    }
}
