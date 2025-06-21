<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariationRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'title' => 'required|string|max:255',
                'local_currency_cost' => 'required|integer',
                'local_currency_price' => 'required|integer',
                'credits_price' => 'required|integer',
                'benefit_id' => 'required|exists:benefits,id'
            ];
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'title' => 'string|max:255',
                'local_currency_cost' => 'integer',
                'local_currency_price' => 'integer',
                'credits_price' => 'integer',
                'benefit_id' => 'exists:benefits,id'
            ];
        }
        return [];
    }
}
