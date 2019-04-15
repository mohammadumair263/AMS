<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    public $timestamps = false;

    protected $fillable = [
        'teacher_id', 'name',
    ];

    public  function student(){
        return $this->hasMany(Student::class);
    }
    public  function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
