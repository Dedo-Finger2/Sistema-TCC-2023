<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
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
        | Request de Empresa
        | ----------------------------------------------------------------
        | Validacoes para permitir a insercao dos dados na tabela de Empresa
        */
        return [
            'nome' => [
                'required',
                'min:3',
                'max:45',
            ],
            'email' => [
                'required',
                'email',
            ],
            'cnpj' => [
                'required',
                'min:18',
                'max:18',
                'unique:empresas,cnpj',
            ],
            'senha' => [
                'required',
                'min:8',
                'max:16',
            ],
        ];
    }
}
