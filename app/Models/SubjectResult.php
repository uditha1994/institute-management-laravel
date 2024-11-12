<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectResult extends Model
{
    use HasFactory;

    protected $table = 'subject_result';
    public $incrementing = false;

    protected $fillable = ['id', 'subject_sub_id', 'result_result_id'];
}
