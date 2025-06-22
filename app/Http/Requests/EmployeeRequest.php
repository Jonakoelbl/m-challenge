<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('post')) {
            return [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date_format:d-m-Y',
                'credit_balance' => 'integer',
                'company_id' => 'required|exists:companies,id',
                'user_id' => 'required|exists:users,id',
            ];
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'first_name' => 'string|max:255',
                'last_name' => 'string|max:255',
                'date_of_birth' => 'date',
                'credit_balance' => 'integer',
                'company_id' => 'exists:companies,id',
                'user_id' => 'exists:users,id',
            ];
        }

        return [
            //
        ];
    }
}
