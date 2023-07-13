<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'age',
        'family'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class,'role_user');
    }

    public function hasRole(string $name)
    {
        return $this->roles()->where('name',$name)->exists();
    }

    public function hasPermission(string $name): bool
    {
        $permission = Permission::where('name',$name)->first();
        if (!$permission){
            return false;
        }
        $roles = $permission->roles()->pluck('name');
        foreach ($roles as $role){
           if ($this->hasRole($role)){
               return true;
           }
        }
        return false;
    }

    public function skills()
    {
        $this->belongsToMany(Skill::class,'user_skill');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function Projects()
    {
        return $this->hasMany(Project::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
    public function myLikes(){
        return $this->hasMany(Like::class);
    }
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
