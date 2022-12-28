<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'course_category_id', 'course_level_id', 'course_price_id', 'instructor_id', 'image', 'title', 'excerpt', 'excerptitle', 'deskripsi','learn'];
    protected $with = ['course_category', 'instructor', 'course_level', 'course_price'];

    public function course_category(){
        return $this->belongsTo(CourseCategory::class);
    }
    public function lesson(){
        return $this->hasMany(Lesson::class);
    }

    public function section(){
        return $this->hasMany(Section::class);
    }

    public function courseuser(){
        return $this->hasOne(CourseUser::class);
    }

    public function instructor(){
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function course_level(){
        return $this->belongsTo(CourseLevel::class);
    }

    public function course_price(){
        return $this->belongsTo(CoursePrice::class);
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' .$search . '%');
        });

        $query->when($filters['course_category'] ?? false, fn($query, $course_category) =>
        $query->whereHas('course_category', fn($query) =>
            $query->where('id', $course_category)
        )                         
    );
        $query->when($filters['course_level'] ?? false, fn($query, $course_level) =>
        $query->whereHas('course_level', fn($query) =>
            $query->where('id', $course_level)
        )                         
    );
        $query->when($filters['course_price'] ?? false, fn($query, $course_price) =>
        $query->whereHas('course_price', fn($query) =>
            $query->where('id', $course_price)
        )                         
    );
        $query->when($filters['instructor'] ?? false, fn($query, $instructor) =>
        $query->whereHas('instructor', fn($query) =>
            $query->where('id', $instructor)
        )                         
    );
    }
}
