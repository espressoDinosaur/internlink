<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Intern;
use App\Models\Recruiter;
use App\Models\Internship;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\FileAttachment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- Create the intern user and profile ---
        $internUser = User::factory()->intern()->create();
        $internProfile = Intern::create([
            'user_id' => $internUser->id,
            'first_name' => 'John',
            'mid_name' => 'A.',
            'last_name' => 'Doe',
            'birthdate' => '1998-05-12',
            'contact_no' => '+1234567890',
            'profile_desc' => 'Motivated computer science student eager to gain real-world experience.',
            'address' => '123 Main Street',
            'expected_graduation' => '2026-07-25',
            'title' => 'Software Engineering Intern',
        ]);

        // --- Create related records for the intern ---
        $internProfile->education()->create([
            'course_program' => 'Computer Science',
            'institution' => 'State University',
            'school_address' => '123 College Ave',
            'start_year' => 2020,
            'end_year' => 2024,
            'description' => 'Studied software development and algorithms.',
        ]);

        $internProfile->experiences()->create([
            'exp_title' => 'Software Developer Intern',
            'exp_company' => 'Tech Corp',
            'exp_address' => '456 Business Rd',
            'start_month' => 'June',
            'start_year' => 2023,
            'end_month' => 'August',
            'end_year' => 2023,
            'role_description' => 'Assisted in building APIs and testing features.',
        ]);

        $internProfile->skills()->create([
            'skill_title' => 'Laravel',
        ]);

        $internProfile->attachments()->create([
            'attachment_filename' => 'resume.pdf',
            'file_path' => 'uploads/resume.pdf',
            'created_uploaded' => now(),
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
