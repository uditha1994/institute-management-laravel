<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_has_student extends Model
{
    use HasFactory;

    protected $table = 'exam_has_students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'exam_id',
        'stu_id'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'stu_id');
    }
}
