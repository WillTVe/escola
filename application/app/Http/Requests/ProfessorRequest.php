<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'curriculo_lattes'  => 'string',
            'id_pessoa' => 'required'
        ];
    }

    public function messages(){
        return [
            'id_pessoa.required'    => 'O campo pessoa é obrigatório'
        ];
    }
}
