<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize() :bool
    {
        return true;
    }

    public function rules() :array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'url' => 'required|url',
            'entity_id' => 'required|exists:entities,id',
            'image' => 'required|image', //|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=200 puedo ponerlo con medida estricta si le saco el min_
        ];
    }
}
