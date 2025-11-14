<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
