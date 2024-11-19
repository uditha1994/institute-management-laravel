<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $primaryKey = 'inst_id';
    protected $fillable = ['inst_name', 'location', 'contact_number'];

    public function branches()
    {
        return $this->hasMany(Branch::class, 'institute_inst_id');
    }
}
