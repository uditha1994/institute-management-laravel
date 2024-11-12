<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'stu_id';

    public function results()
    {
        return $this->hasMany(Result::class, 'student_stu_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student', 'student_stu_id', 'course_course_id');
    }
}
