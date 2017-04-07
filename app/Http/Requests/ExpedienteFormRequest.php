<?php

namespace CandyLily\Http\Requests;

use CandyLily\Http\Requests\Request;

class ExpedienteFormRequest extends Request
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
            'nexpediente'=>'required|max:50',
            'cecosf',
            'nombre'=>'required|max:50',
            'apellido'=>'required|max:50',
            'alias',
            'fnac'=>'required|max:50',
            'sexo',
            'efamiliar',
            'municipionac',
            'departamentonac',
            'paisnac',
            'nacionalidad',
            'documentoidentidad',
            'ndocidenti',
            'telefonopac',
            'ocupacion',
            'direccion',
            'departamentodire',
            'municipiodire',
            'canton',
            'ageografica',
            'asegurado',
            'areacotiza',
            'nafiliacion',
            'ltrabajo',
            'telefonotra',
            'npadre',
            'nmadre',
            'nconyuge',
            'parentescoresponsable',
            'nresponsable',
            'docidentires',
            'ndocidentires',
            'direccionres',
            'telefonores',
            'parentescopdatos',
            'nombrepdatos',
            'docidentidadpdatos',
            'ndocpdatos',
            'observaciones',
            'estado',
            'idtinfo',          
        ];
    }
}
