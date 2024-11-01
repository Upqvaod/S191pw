<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'txtisbn' => 'required|numeric|digits:13',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required|string',
            'txtpaginas' => 'required|integer|min:1',
            'txtyear' => 'required|integer|between:1000,' . date('Y'),
            'txteditorial' => 'required|string',
            'txtemail' => 'required|email'
        ];
    }
}
