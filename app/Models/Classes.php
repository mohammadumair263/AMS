<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'teacher_id', 'nmae',
    ];
}
