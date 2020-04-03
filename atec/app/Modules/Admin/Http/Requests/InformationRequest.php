<?php

namespace App\Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;

class InformationRequest extends FormRequest
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
          
         
      ];

      $languages = Language::where('status', 1)->sorted()->get();
      foreach ($languages as $language) {
          $rules[$language->locale . '.name'] = 'required';
          $rules[$language->locale . '.text'] = 'required';

      }
      return $rules;
    }
}
