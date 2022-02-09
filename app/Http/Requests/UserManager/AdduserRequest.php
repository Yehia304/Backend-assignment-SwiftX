<?php

namespace App\Http\Requests\UserManager;

use Illuminate\Foundation\Http\FormRequest;

class AdduserRequest extends FormRequest
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
            'name' => 'required|string|max:200',
        ];
    }

}
