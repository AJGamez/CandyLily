<?php

namespace CandyLily\Http\Requests;

use CandyLily\Http\Requests\Request;

class TratamientoFormRequest extends Request
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

            'codigo'=>'required|max:50',
            'nombre'=>'required|max:50|unique:tratamiento',

        ];
    }
}
