<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interns = Intern::all();

        foreach ($interns as $intern) {
            $intern->education()->create([
                'course_program' => 'Computer Science',
                'institution' => 'State University',
                'school_address' => '123 College Ave',
                'start_year' => 2020,
                'end_year' => 2024,
                'description' => 'Studied software development and algorithms.',
            ]);
        }
    }
}
