<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRotaRequest extends FormRequest
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
        | Request de Rota
        | ----------------------------------------------------------------
        | Validacoes para permitir a atualizacao dos dados na tabela de Rota
        */
        return [
            'id_ida_onibus' => [
                'exists:idas_onibus,id_ida_onibus',
            ],
            'id_volta_onibus' => [
                'required',
                'exists:voltas_onibus,id_volta_onibus',
            ],
        ];
    }
}
