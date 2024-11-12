<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    protected $table = 'course_student';
    public $incrementing = false;

    protected $fillable = ['id', 'course_course_id', 'student_stu_id'];
}
