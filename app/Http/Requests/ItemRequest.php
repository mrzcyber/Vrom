<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class ItemRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'name' => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
            'brand_id' => 'required|exists:brands,id',
            'features' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'star' => 'nullable|numeric|min:0|max:5',
            'review' => 'nullable|integer|min:0',
            'image.*'=>'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

        ];
    }
}
