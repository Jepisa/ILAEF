<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name',];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function activities()
    {
        return $this->hasMany('App\Models\Activities');
    }
}
