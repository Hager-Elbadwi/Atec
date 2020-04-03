<?php

namespace App\Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoryOrderRequest extends FormRequest
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
            'user_id'                              => '',
            'consignee_id'                         => '',
            'employee_id'                          => '',
            'refraction'                           => '',
            'lens_number'                          => '',
            'sphere'                               => '',
            'cylinder'                             => '',
            'axis'                                 => '',
            'Addition'                             => '',
            'prism_1'                              => '',
            'base_1'                               => '',
            'prism_2'                              => '',
            'base_2'                               => '',
            'res_prism'                            => '',
            'res_base'                             => '',
            'lens_id'                              => '',
            'product_id'                           => '',
            'diameter_right'                       => '',
            'diameter_left'                        => '',
            'optimized_diameter_right'             => '',
            'optimized_diameter_left'              => '',
            'created_at'                           => '',
            'updated_at'                           => '',
        ];
    }
}
