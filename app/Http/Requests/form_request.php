<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class form_request extends FormRequest
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
            'number' => 'required|numeric|between:0,99',
            'name' => 'required',
            'height' => 'required|numeric|between:120,250',
            'affiliation' => 'required',
            'info' => 'required',
            'pg_flg' => 'required',
            'sg_flg' => 'required',
            'sf_flg' => 'required',
            'pf_flg' => 'required',
            'c_flg' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => '背番号は必ず入力して下さい',
            'number.between' => '背番号は0~99の間で入力して下さい',
            'name.required' => '名前は必ず入力して下さい',
            'height.required' => '身長は必ず入力して下さい',
            'height.between' => '身長おかしくない？笑',
            'affiliation.required' => '所属は必ず入力して下さい',
            'info.required' => '説明は必ず入力してください',
        ];
    }
}
