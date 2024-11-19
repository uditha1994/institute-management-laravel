<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseHasBranch extends Model
{
    use HasFactory;

    protected $table = 'course_has_branch';
    protected $fillable = ['id', 'course_id', 'branch_id'];
}
