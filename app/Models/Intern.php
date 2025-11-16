<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'mid_name',
        'last_name',
        'birthdate',
        'contact_no',
        'address',
        'profile_desc',
        'expected_graduation',
        'title'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function attachments()
    {
        return $this->hasMany(FileAttachment::class);
    }
}
