<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    const PHP = 1;
    const HTML_CSS = 2;
    const JAVASCRIPT = 3;

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }
}