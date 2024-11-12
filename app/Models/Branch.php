<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $primaryKey = 'branch_id';

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_course_id');
    }

    public function institutes()
    {
        return $this->hasMany(Institute::class, 'branch_branch_id');
    }
}
