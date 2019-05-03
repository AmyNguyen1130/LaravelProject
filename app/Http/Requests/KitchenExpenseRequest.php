<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KitchenExpenseRequest extends FormRequest
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
            'txtItem'=>'required',
            'txtQuantity'=>'required|numeric',
            'txtPrice'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'txtItem.required' => 'You have to enter item',
            'txtQuantity.required' => 'You have to enter quantity',
            'txtQuantity.numeric' => 'Quantity have to be number',
            'txtPrice.required' => 'You have to enter price',
            'txtPrice.numeric' => 'Price have to be number'
        ];
    }
}
