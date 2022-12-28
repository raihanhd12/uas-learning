<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['course', 'section'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }
    
    public function scopeFilter($query, array $filters){

        $query->when($filters['course'] ?? false, fn($query, $course) =>
        $query->whereHas('course', fn($query) =>
            $query->where('course_id', $course)
        ));   
        $query->when($filters['course/video'] ?? false, fn($query, $video) =>
        $query->whereHas('video', fn($query) =>
            $query->where('video_id', $video)
        ));   
    }

    public function YoutubeID($url)
    {
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }

}
