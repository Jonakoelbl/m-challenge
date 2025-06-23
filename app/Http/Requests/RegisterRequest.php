<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|email|max:255|unique:users,email',
            'password'              => 'required|string|min:8|confirmed',
            'role'                  => 'nullable|string|in:maslow_admin,company_admin,company_employee',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'El nombre es obligatorio.',
            'email.required'        => 'El email es obligatorio.',
            'email.email'           => 'Debe ingresar un email válido.',
            'email.unique'          => 'El email ya está registrado.',
            'password.required'     => 'La contraseña es obligatoria.',
            'password.min'          => 'La contraseña debe tener al menos 8 caracteres.',
            'role.in'               => 'El rol seleccionado no es válido.',
        ];
    }
}
