<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_id',
        'title',
        'body',
        'description',
        'status',
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
        $this->morphMany(Comment::class,'commentable');
    }
    public function likes(){
        $this->morphMany(Like::class,'likeable');
    }
    public function tags(){
        $this->morphMany(Tag::class,'tagable');
    }

    public function scopeStatus($query ,$status)
    {
    $query->where('status',$status)->get();
    }

    public static function scopeLastblogs($query, $limit = 6)
    {
        return $query->where('status', true)
            ->orderBy('id', 'DESC')
            ->take($limit);
    }
    public function getStatusTextAttribute()
    {
        return $this->status?"published":"unpublished";
    }

}
