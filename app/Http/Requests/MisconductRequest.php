<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MisconductRequest extends FormRequest
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
            'txtContent'=>'required',
            'txtTime'=>'required',
            'txtMinus' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'txtContent.required' => 'You have to enter content',
            'txtTime.required' => 'You have to enter time',
            'txtMinus.required' => 'You have to enter minus',
            'txtMinus.numeric' => 'Minus have to be number'
        ];
    }
}
