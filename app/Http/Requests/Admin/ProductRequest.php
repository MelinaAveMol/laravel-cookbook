<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'title' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Hazlo publico',
            'title.required' => 'A titulo personal',
        ];
    }
}


