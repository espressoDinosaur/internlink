<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Intern;
use App\Models\Recruiter;
use App\Models\Internship;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- Create the intern user and profile ---
        $internUser = User::factory()->intern()->create();
        Intern::create([
            'user_id' => $internUser->id,
            'first_name' => 'John',
            'mid_name' => 'A.',
            'last_name' => 'Doe',
            'birthdate' => '1998-05-12',
            'contact_no' => '+1234567890',
            'profile_desc' => 'Motivated computer science student eager to gain real-world experience.',
        ]);

        // --- Create the recruiter user and profile ---
        $recruiterUser = User::factory()->recruiter()->create();
        $recruiterProfile = Recruiter::firstOrCreate(
            ['user_id' => $recruiterUser->id],
            [
                'company_name' => 'InternLink Inc.',
                'size' => 'Medium',
                'about' => 'We connect interns with amazing opportunities around the globe.',
                'industry' => 'Technology',
                'contact_person' => 'Jane Smith',
                'contact_number' => '+1987654321',
                'title' => 'HR Manager',
                'website' => 'https://www.internlink.com',
                'location' => 'New York, USA',
            ]
        );

        // --- Create 10 internships linked to the recruiter ---
        Internship::factory(10)->create([
            'recruiter_id' => $recruiterProfile->id,
        ]);
    }
}
