<?php

namespace CandyLily\Http\Requests;

use CandyLily\Http\Requests\Request;

class UsuarioFormRequest extends Request
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
            'name'=>'required|max:50',
            'apellido'=>'required|max:50',
            'dui'=>'required|max:10',
            'direccion'=>'max:255',
            'telefono'=>'max:10',
            'email'=>'required|max:100|email|unique:users',
            'idcargo'=>'max:50',            
        ];
    }
}
