<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'txtxName'=>'required',
            'txtFloor'=>'required',
            'txtNumberOfMember' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'txtxName.required' => 'You have to enter room name',
            'txtFloor.required' => 'You have to enter floor',
            'txtNumberOfMember.required' => 'You have to enter number of member',
            'txtNumberOfMember.numeric' => 'Number of member have to be number'
        ];
    }
}
