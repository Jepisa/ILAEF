<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'body',
        'url',
        'entity_id',
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
