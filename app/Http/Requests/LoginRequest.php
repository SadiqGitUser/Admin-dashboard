<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:20'
        ];
    }
    public function messages()
    {
        return[
            'email.required' =>'Xais edirik email adresinizi girin',
            'email.min'      => 'minimum email simvolu 3 simvoldan çox olmalıdı',
            'email.max' => 'Maximum email sahesi 20 somvoldur',
            'password.required' => 'Zehmet olmasa sifreni girin',
            'password.min' => 'Minimum sifre 3den çox olmalıdır',
            'password.max' => 'Maximum sifre 20den cox olmalidir'

        ];
    }

}
