<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $primaryKey = 'inst_id';

    public function branch()
    {
        return $this->belongsTo(
            Branch::class,
            'branch_branch_id'
        );
    }
}
