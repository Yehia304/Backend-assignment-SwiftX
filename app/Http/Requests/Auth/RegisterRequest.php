<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
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
        //resources
        //password check current and confirm

        return [
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:20',
            'password_confirmation' => 'required|same:password',
            'name' => 'required|string|max:200',
        ];
    }



}
