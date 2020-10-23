<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'country_id',
        'image',
        'state_id',
        ];

    use HasFactory;

    public static function untilLastEightNews()
    {
        return $news = News::orderBy('created_at', 'desc')->limit(8)->get();//if you want, you can change this

    }

    public function entity()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
