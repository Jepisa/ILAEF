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
}
