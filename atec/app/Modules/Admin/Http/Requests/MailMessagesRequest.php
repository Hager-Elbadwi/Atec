<?php

namespace App\Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailMessagesRequest extends FormRequest
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
          'title'      => 'required',
          'body'       => 'required',
          'msg'        => 'required',
          'input_name' => 'required',
          'link'       => 'required',
      ];


      return $rules;
    }
}