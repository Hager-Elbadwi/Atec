<?php

namespace App\Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|confirmed|min:6',
            'status' => 'required',
            'role' => 'required',
        ];

        if ($this->method() == 'PUT') {
            $rules['email'] = 'required|email|unique:admins,email,'. $this->segment(4) .',id';
            $rules['password'] = '';
        }

        return $rules;
    }
}
