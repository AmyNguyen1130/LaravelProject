<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectricRequest extends FormRequest
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
            'txtTime'=>'required',
            'txtOldNumber'=>'required|numeric',
            'txtNewNumber'=>'required|numeric',
            'txtPrice'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'txtTime.required' => 'You have to enter time',
            'txtOldNumber.required' => 'You have to enter old number',
            'txtOldNumber.numeric' => 'Old number have to be number',
            'txtNewNumber.required' => 'You have to enter new number',
            'txtNewNumber.numeric' => 'New number have to be number',
            'txtPrice.required' => 'You have to enter price',
            'txtPrice.numeric' => 'Price have to be number'
        ];
    }
}
