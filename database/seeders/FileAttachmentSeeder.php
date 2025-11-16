<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\FileAttachment;

class FileAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interns = Intern::all();

        foreach ($interns as $intern) {
            $intern->attachments()->create([
                'attachment_filename' => 'resume.pdf',
                'file_path' => 'uploads/resume.pdf',
                'created_uploaded' => now(),
            ]);
        }
    }
}
