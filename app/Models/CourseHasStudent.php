<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseHasStudent extends Model
{
    use HasFactory;

    protected $table = 'course_has_student';
    protected $fillable = ['id', 'course_course_id', 'student_stu_id'];
}
