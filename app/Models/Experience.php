<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_id', 'exp_title', 'exp_company', 'exp_address', 'start_month', 'start_year', 'end_month', 'end_year', 'role_description'
    ];

    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }
}
