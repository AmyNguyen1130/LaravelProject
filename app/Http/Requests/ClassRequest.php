<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRequest extends FormRequest
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
            'txtName'=>'required|unique:classes,name',
            'txtNumberOfStudent'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'txtName.required' => 'You have to enter class name',
            'txtName.unique' => 'Class name already',
            'txtNumberOfStudent.required' => 'You have to enter number of students',
            'txtOldPrice.numeric' => 'Number of student have to be number'
        ];
    }
}
