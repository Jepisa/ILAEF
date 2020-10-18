<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ActivitiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Prepare the data for validation. Puedo hacer cambiar lo qu traer el request para prepararlo para la validación
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        /**$this->merge([
            'slug' => Str::slug($this->slug),
        ]);*/
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|dimensions:min_width=100,min_height=200', //puedo ponerlo con medida estricta si le saco el min_
            'state_id' => 'required|exists:states,id',
        ];
    }

    /**
     * Get custom attributes for validator errors. Para personalizar los mensajes de error
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'url' => 'Tenés que poner una :attribute valido Che!',
        ];
    }
}
