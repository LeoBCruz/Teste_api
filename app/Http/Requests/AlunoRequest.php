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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'=>'requred|id',
            'name'=>'requred|string',
            'e-mail'=>'requred|string',
            'cpf'=>'requred|string',
            'data_nasc'=>'requred|date',
            'telefone'=>'requred|string'

        ];
    }
}
