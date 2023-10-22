<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
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
        | Request de Feedback
        | ----------------------------------------------------------------
        | Validacoes para permitir a insercao dos dados na tabela de Feedback
        */
        return [
            'id_usuario' => [
                'exists:usuarios,id_usuario',
                'required',
            ],
            'comentario' => [
                'min:3',
                'max:255',
            ],
            'data' => [
                'required',
                'date'
            ],
            'feedback' => [
                'required',
                'boolean',
            ],
        ];
    }
}
