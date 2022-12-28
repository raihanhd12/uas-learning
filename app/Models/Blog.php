<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;    
    
    protected $guarded = ['id'];
    protected $with = ['blog_category', 'author'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' .$search . '%')
                         ->orWhere('body','like', '%' .$search . '%');
        });
        $query->when($filters['blog_category'] ?? false, function($query, $blog_category){
            return $query->whereHas('blog_category', function($query) use ($blog_category){
                $query->where('id', $blog_category);
            });                         
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )                         
        );
    }
    
    public function blog_category(){
        return $this->belongsTo(BlogCategory::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    } 
}
