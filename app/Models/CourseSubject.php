<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    use HasFactory;

    protected $table = 'course_subject';
    public $incrementing = false;

    protected $fillable = ['id', 'course_course_id', 'subject_sub_id'];
}
