<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtUsername'=>'required',
            'txtPassword'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'txtUsername.required' => 'You have to enter username',
            'txtPassword.required' => 'You have to enter password'
        ];
    }
}
