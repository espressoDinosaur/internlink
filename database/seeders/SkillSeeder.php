<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interns = Intern::all();

        foreach ($interns as $intern) {
            $intern->skills()->create([
                'skill_title' => 'Laravel',
            ]);
        }
    }
}
