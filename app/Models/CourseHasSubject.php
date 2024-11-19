<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseHasSubject extends Model
{
    use HasFactory;

    protected $table = 'course_has_subject';
    protected $fillable = ['id', 'course_course_id', 'subject_sub_id'];
}
