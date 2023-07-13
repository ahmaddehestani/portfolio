<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'tagable_id',
        'tagable_type',

    ];

    public function tagable()
    {
        return $this->morphTo();
    }

}
