<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'sub_id';

    public function results()
    {
        return $this->belongsToMany(Result::class, 'subject_result', 'subject_sub_id', 'result_result_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_subject', 'subject_sub_id', 'course_course_id');
    }
}
