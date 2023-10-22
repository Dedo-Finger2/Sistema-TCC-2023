<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItinerarioRequest extends FormRequest
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
        | Request de Itinerario
        | ----------------------------------------------------------------
        | Validacoes para permitir a insercao dos dados na tabela de Itinerario
        */
        return [
            'codigo_itinerario' => [
                'required',
                'unique:itinerarios,codigo_itinerario',
                'min:8',
                'max:50',
            ],
            'id_onibus' => [
                'required',
                'exists:onibus,id_onibus',
            ],
            'id_rota' => [
                'required',
                'exists:rotas,id_rota',
            ],
        ];
    }
}
