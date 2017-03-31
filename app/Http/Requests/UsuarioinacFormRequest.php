<?php

namespace CandyLily\Http\Requests;

use CandyLily\Http\Requests\Request;

class UsuarioinacFormRequest extends Request
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
          'username'=>'required|max:50',
          'contra'=>'required|min:6|actual_password',
          'password'=>'confirmed|min:6',
          'password_confirmation'=>'required|min:6',

        ];
    }
}
