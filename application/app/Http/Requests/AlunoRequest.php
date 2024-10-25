<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'matricula' => 'required|min:6|max:15|string'
        ];
    }

    public function messages(){
        return [
            'matricula.required'  => 'O campo matrícula é obrigatório',
            'matricula.min' => 'O campo matrícula deve ter no mínimo 6 caracteres',
            'matricula.max' => 'O campo matrícula deve ter no máximo 15 caracteres'
        ];
    }
}
