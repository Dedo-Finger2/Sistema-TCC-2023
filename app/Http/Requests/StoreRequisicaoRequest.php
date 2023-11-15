<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequisicaoRequest extends FormRequest
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
        | Request de Requisicao
        | ----------------------------------------------------------------
        | Validacoes para permitir a insercao dos dados na tabela de Requisicao
        */
        return [
            'id_usuario' => [
                'required',
                'exists:usuarios,id_usuario',
            ],
            'id_feedback' => [
                'exists:feedbacks,id_feedback',
            ],
            'data_hora' => [
                'required',
                'date',
                'date_format:Y-m-d H:i',
            ],
            'retorno_requisicao' => [
                'required',
                'boolean',
            ],
        ];
    }
}
