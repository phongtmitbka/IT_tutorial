<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Lesson extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}