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
        return [
            'local_currency_cost' => 'required|integer',
            'local_currency_price' => 'required|integer',
            'credits_price' => 'required|integer',
            'employee_id' => 'required|exists:employees,id',
            'variation_id' => 'required|exists:variations,id',
            'gift_card_id' => 'required|exists:gift_cards,id',
        ];
    }
}
