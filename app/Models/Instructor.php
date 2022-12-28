<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function instructors(){
        return $this->hasMany(Course::class);
    }
}
