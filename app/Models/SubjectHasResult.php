<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectHasResult extends Model
{
    use HasFactory;

    protected $table = 'subject_has_result';
    protected $fillable = ['id', 'subject_sub_id', 'result_result_id'];
}
