<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_course_id', 'student_stu_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'course_subject', 'course_course_id', 'subject_sub_id');
    }

    public function branches()
    {
        return $this->hasMany(Branch::class, 'course_course_id');
    }
}
