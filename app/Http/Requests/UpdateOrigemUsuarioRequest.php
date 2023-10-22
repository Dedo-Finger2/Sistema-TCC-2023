<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrigemUsuarioRequest extends FormRequest
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
        | Request de OrigemUsuario
        | ----------------------------------------------------------------
        | Validacoes para permitir a atualizacao dos dados na tabela de OrigemUsuario
        */
        return [
            'nome' => [
                'required',
                'min:3',
                'max:100',
            ],
            'id_local_requisitado' => [
                'required',
                'exists:locais_requisitados,id_local_requisitado',
            ],
            'id_requisicao' => [
                'required',
                'exists:requisicoes,id_requisicao',
            ],
            'id_usuario' => [
                'required',
                'exists:usuarios,id_usuario',
            ],
            'id_endereco' => [
                'exists:enderecos,id_endereco',
            ],
        ];
    }
}
