<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionesEditRequest extends FormRequest
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

            'titulo' => 'required',
            'cuerpo' => 'required',
            'usuarios_id' => 'required',
        ];
    }
 public function messages()
    {
        return [
            'titulo.required' => 'Por favor escribir un titulo',
            'cuerpo.required' => 'Por favor escribir un cuerpo',
            'usuarios_id.required' => 'Por favor seleccionar un correo',
        ];
    }
}
