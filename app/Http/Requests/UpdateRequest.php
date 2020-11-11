<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'nombre' => 'required',
            'email' => 'email',
            'email' => 'required|email|unique:usuarios',
        ];
    }
 public function messages()
    {
        return [
            'nombre.required' => 'Por favor escribir un nombre',
            'email.required' => 'Por favor escribir un correo electronico correcto',
            'email.unique' => 'El correo ya esta registrado',
        ];
    }
}