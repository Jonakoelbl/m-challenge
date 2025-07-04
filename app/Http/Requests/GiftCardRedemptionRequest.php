<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiftCardRedemptionRequest extends FormRequest
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
                'local_currency_cost' => 'required|integer',
                'local_currency_price' => 'required|integer',
                'credits_price' => 'required|integer',
                'employee_id' => 'required|exists:employees,id',
                'variation_id' => 'required|exists:variations,id',
                'gift_card_id' => 'required|exists:gift_cards,id'
            ];
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'local_currency_cost' => 'integer',
                'local_currency_price' => 'integer',
                'credits_price' => 'integer',
                'employee_id' => 'exists:employees,id',
                'variation_id' => 'exists:variations,id',
                'gift_card_id' => 'exists:gift_cards,id'
            ];
        }

        return [];
    }
}
