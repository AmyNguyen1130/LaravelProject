<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'txtCode'=>'required|unique:educators,code',
            'txtName'=>'required',
            'txtAddress'=>'required',
            'txtPhone'=>'required'
        ];
    }

    public function messages(){
        return [
            'txtName.required' => 'You have to enter educator name',
            'txtCode.required' => 'You have to enter educator code',
            'txtCode.unique' => 'Code already',
            'txtAddress.required' => 'You have to enter address',
            'txtPhone.required' => 'You have to enter phone'
        ];
    }
}
