<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:7'],
            'cpf' => ['required'],
        ];
    }

    public function messages():array {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.max' => 'Senha deve conter no máximo 255 caracteres',
            'cpf.required' => 'CPF é obrigatório',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Senha deve conter no mínimo 7 caracteres',
            'email.required' => 'Email é obrigatório',
            'email.email' => 'Email deve ser um endereço válido',
        ];
    }
}
