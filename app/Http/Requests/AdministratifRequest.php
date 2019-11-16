<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdministratifRequest extends Request
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
            'name' => 'required|string|max:20',
            'birthday' => 'required',
            'adress' => 'required',
            'email' => 'required|email|unique:administratifs',
            'login' => 'required|unique:administratifs',
            'password' => 'required',
        ];
    }
}
