<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function messages()
    {
        return[
            'title.required'=>'Title é obrigatório.',
            'body.required' => 'body é obrigatório'
        ];
    }
    public function rules()
    {
        return [
            'title'=>'required',
            'body'=>'required'
        ];
    }
}
