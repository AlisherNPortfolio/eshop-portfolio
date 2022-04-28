<?php

namespace App\Modules\Order\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'delivery_region_id' => 'required|integer|min:1',
            'delivery_district_id' => 'required|integer|min:1',
            'delivery_address' => 'required|string|min:10|max:255',
            'customer_comment' => 'nullable|string|max:500',
            'has_installment' => 'required|boolean',
            'initial_payment' => 'required_if:has_installment,true|integer',
            'payment_type' => 'required|integer',
            'products' => 'required|array:product_id,quantity',
            'products.*.product_id' => 'required|integer|min:1',
            'products.*.quantity' => 'required|integer',
            'payments' => 'required_if:has_installment,true|array:payment_period',
            'payments.*.payment_period' => 'required|integer|min:1',
            'payments.*.initial_payment' => 'required|integer'
        ];
    }
}
