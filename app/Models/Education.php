<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_id', 'course_program', 'institution', 'school_address', 'start_year', 'end_year', 'description'
    ];

    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }
}
