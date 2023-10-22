<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIdaOnibusRequest extends FormRequest
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
        | Request de IdaOnibus
        | ----------------------------------------------------------------
        | Validacoes para permitir a atualizacao dos dados na tabela de IdaOnibus
        */
        return [
            'horairo' => [
                'required',
                'date_format:H:i'
            ],
            'id_endereco' => [
                'required',
                'exists:enderecos,id_endereco'
            ],
        ];
    }
}
