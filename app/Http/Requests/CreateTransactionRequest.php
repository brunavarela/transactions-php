<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTransactionRequest extends FormRequest
{
    public function authorize(): bool {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'value' => ['required', 'numeric', 'gte:0.01'],
            'payer' => 'required',
            'payee' => 'required',
        ];
    }

    public function messages():array {
        return [
            'value.required' => 'O valor é obrigatório',
            'payer.required' => 'O nome do emissor é obrigatório',
            'payee.required' => 'O nome do destinatário é obrigatório',
        ];
    }
}
