<?php

namespace App\Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
        $rules = [
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            // 'name' => 'required',
            // 'email' => 'required|email|unique:customers,email',
            // 'address' => 'required',
            // 'phone' => 'required',
            // 'password' => 'required|confirmed|min:6',
            
        ];

        return $rules;
    }
}