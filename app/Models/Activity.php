<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body','image'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
}
