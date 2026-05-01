<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
        'name'       => 'required|string|max:255',
        'start_date' => 'required',
        'end_date'   => 'required',
        'address'    => 'required|string',
        'city'       => 'required|string|max:255',
        'zip'        => 'required|string|max:10',
        ];
    }
}
