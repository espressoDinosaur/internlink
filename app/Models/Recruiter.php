<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    public function internships()
    {
        return $this->hasMany(Internship::class);
    }
}
