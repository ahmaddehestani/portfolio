<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_id',
        'title',
        'body',
        'description',
        'status',
        'url',
        'client_name',
        'start',
        'end',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function comments(){
       return $this->morphMany(Comment::class,'commentable');
    }
    public function likes(){
       return $this->morphMany(Like::class,'likeable');
    }
    public function tags(){
       return $this->morphMany(Tag::class,'tagable');
    }

    public function scopeStatus($query,$status)
    {
$query->where('status',$status)->get();
    }
}
