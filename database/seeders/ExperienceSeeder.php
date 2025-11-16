<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interns = Intern::all();

        foreach ($interns as $intern) {
            $intern->experiences()->create([
                'exp_title' => 'Software Developer Intern',
                'exp_company' => 'Tech Corp',
                'exp_address' => '456 Business Rd',
                'start_month' => 'June',
                'start_year' => 2023,
                'end_month' => 'August',
                'end_year' => 2023,
                'role_description' => 'Assisted in building APIs and testing features.',
            ]);
        }
    }
}
