<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileAttachment extends Model
{
    use HasFactory;

    protected $fillable = ['intern_id', 'attachment_filename', 'file_path', 'created_uploaded'];

    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }
}
