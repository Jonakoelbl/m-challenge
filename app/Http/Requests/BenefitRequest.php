<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BenefitRequest extends FormRequest
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
        if($this->isMethod('get')) {
            return [
              'name' => 'string|max:255',
              'brand_id' => 'integer|exists:brands,id',
              'country_of_benefit' => 'string|exists:countries,iso_3',
            ];
        }

        if ($this->isMethod('post')) {
            return [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'country_of_benefit' => 'required|string|exists:countries,iso_3',
                'brand_id' => 'required|integer|exists:brands,id'
            ];
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'name' => 'string|max:255',
                'description' => 'string',
                'country_of_benefit' => 'string|exists:countries,iso_3',
                'brand_id' => 'integer|exists:brands,id'
            ];
        }

        return [];
    }
}
