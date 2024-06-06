<?php

namespace App\Managers\Customer\CustomerAddress\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerAddressRequest extends FormRequest
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
          //  'customer_id'=>'required|max:255',
            'address_1'=> 'required|max:255',
            'address_2'=> 'required',
            'city'=> 'required|max:255',
            'state_id'=> 'required',
            'country_id'=> 'required',
        ];
    }
}
