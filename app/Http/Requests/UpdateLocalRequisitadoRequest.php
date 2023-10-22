<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocalRequisitadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /*
        | ----------------------------------------------------------------
        | Request de LocalRequisitado
        | ----------------------------------------------------------------
        | Validacoes para permitir a atualizacao dos dados na tabela de LocalRequisitado
        */
        return [
            'nome' => [
                'required',
                'min:3',
                'max:100',
            ],
            'id_endereco' => [
                'exists:enderecos,id_endereco',
            ],
        ];
    }
}
