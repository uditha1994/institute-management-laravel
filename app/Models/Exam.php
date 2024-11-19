<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $primaryKey = 'exam_id';
    protected $fillable = ['exam_name', 'exam_date', 'total_marks'];

    public function results()
    {
        return $this->hasMany(Result::class, 'exam_exam_id');
    }
}
