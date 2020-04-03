<?php

namespace App\Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;

class PageImagesRequest extends FormRequest
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
      $rules = ['photo' => 'required|image','page_id'=>''];

    //   $languages = Language::where('languages_status', 1)->sorted()->get();
    //   foreach ($languages as $language) {
    //       $rules[$language->locale . '.title'] = 'required';
    //       $rules[$language->locale . '.keywords'] = 'required';
    //       $rules[$language->locale . '.meta_desc'] = 'required';

    //   }
      return $rules;
    }
}
