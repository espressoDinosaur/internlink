<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_id',
        'internship_id',
        'status',
        'application_date'
    ];

    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}