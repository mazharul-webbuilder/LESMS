<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:products,name|string|max:255',
            'product_category_id' => 'nullable|integer|exists:product_categories,id',
            'product_brand_id' => 'nullable|integer|exists:product_brands,id',
            'purchase_price' => 'nullable|numeric|min:0',
            'current_price' => 'required|numeric|min:0',
            'minimum_order_quantity' => 'required|integer|min:1',
            'image' => 'required|image|max:2048',
            'short_description' => 'required|string|max:500',
            'description' => 'required|string',
            'privacy_policy' => 'nullable|string',
            'return_policy' => 'nullable|string',
         ];
    }
}
