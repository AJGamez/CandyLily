<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Expediente;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\ExpedienteFormRequest;
use DB;
use Auth;

class ExpedienteController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
    	if($request) {
    		$query=trim($request->get('searchText'));
    		$expediente1=DB::table('expediente')            
            ->where('nombre', 'LIKE', '%'.$query.'%')  
            ->where('estado', '=', '1')
            ->orderBy('id','asc')
            ->paginate(5);

            return view('expediente.index',["expedientes"=>$expediente1,"searchText"=>$query]);
    	}        
    } 

    public function create() {
        return view("expediente.create");
    }    

    public function store(ExpedienteFormRequest $request) {
        $idus=Auth::id();        
        $expediente1=new Expediente;                

        $expediente1->nexpediente=$request->get('nexpediente');
        $expediente1->cecosf=$request->get('cecosf');
        $expediente1->nombre=$request->get('nombre');
        $expediente1->apellido=$request->get('apellido');
        $expediente1->alias=$request->get('alias');
        $expediente1->fnac=$request->get('fnac');
        $expediente1->sexo=$request->get('sexo');
        $expediente1->efamiliar=$request->get('efamiliar');
        $expediente1->municipionac=$request->get('municipionac');
        $expediente1->departamentonac=$request->get('departamentonac');
        $expediente1->paisnac=$request->get('paisnac');
        $expediente1->nacionalidad=$request->get('nacionalidad');
        $expediente1->documentoidentidad=$request->get('documentoidentidad');
        $expediente1->ndocidenti=$request->get('ndocidenti');
        $expediente1->telefonopac=$request->get('telefonopac');
        $expediente1->ocupacion=$request->get('ocupacion');
        $expediente1->direccion=$request->get('direccion');
        $expediente1->departamentodire=$request->get('departamentodire');
        $expediente1->municipiodire=$request->get('municipiodire');
        $expediente1->canton=$request->get('canton');
        $expediente1->ageografica=$request->get('ageografica');
        $expediente1->asegurado=$request->get('asegurado');
        $expediente1->areacotiza=$request->get('areacotiza');
        $expediente1->nafiliacion=$request->get('nafiliacion');
        $expediente1->ltrabajo=$request->get('ltrabajo');
        $expediente1->telefonotra=$request->get('telefonotra');
        $expediente1->npadre=$request->get('npadre');
        $expediente1->nmadre=$request->get('nmadre');
        $expediente1->nconyuge=$request->get('nconyuge');
        $expediente1->parentescoresponsable=$request->get('parentescoresponsable');
        $expediente1->nresponsable=$request->get('nresponsable');
        $expediente1->docidentires=$request->get('docidentires');
        $expediente1->ndocidentires=$request->get('ndocidentires');
        $expediente1->direccionres=$request->get('direccionres');
        $expediente1->telefonores=$request->get('telefonores');
        $expediente1->parentescopdatos=$request->get('parentescopdatos');
        $expediente1->nombrepdatos=$request->get('nombrepdatos');
        $expediente1->docidentidadpdatos=$request->get('docidentidadpdatos');
        $expediente1->ndocpdatos=$request->get('ndocpdatos');
        $expediente1->observaciones=$request->get('observaciones');                
        $expediente1->estado=$idus;
        $expediente1->idtinfo=$idus;

        $expediente1->save();
        return Redirect::to('expediente');
    }

    public function show($id) {
        return view("expediente.show", ["expediente"=>Expediente::findOrFail($id)]);
    }

    public function edit($id) {    
        return view("expediente.edit", ["expediente"=>Expediente::findOrFail($id)]);
    }

    public function update(ExpedienteFormRequest $request,$id) {
        $idus=Auth::id();       
        $expediente1=Expediente::findOrFail($id);
               	        
   		$expediente1->nexpediente=$request->get('nexpediente');
        $expediente1->cecosf=$request->get('cecosf');
        $expediente1->nombre=$request->get('nombre');
        $expediente1->apellido=$request->get('apellido');
        $expediente1->alias=$request->get('alias');
        $expediente1->fnac=$request->get('fnac');
        $expediente1->sexo=$request->get('sexo');
        $expediente1->efamiliar=$request->get('efamiliar');
        $expediente1->municipionac=$request->get('municipionac');
        $expediente1->departamentonac=$request->get('departamentonac');
        $expediente1->paisnac=$request->get('paisnac');
        $expediente1->nacionalidad=$request->get('nacionalidad');
        $expediente1->documentoidentidad=$request->get('documentoidentidad');
        $expediente1->ndocidenti=$request->get('ndocidenti');
        $expediente1->telefonopac=$request->get('telefonopac');
        $expediente1->ocupacion=$request->get('ocupacion');
        $expediente1->direccion=$request->get('direccion');
        $expediente1->departamentodire=$request->get('departamentodire');
        $expediente1->municipiodire=$request->get('municipiodire');
        $expediente1->canton=$request->get('canton');
        $expediente1->ageografica=$request->get('ageografica');
        $expediente1->asegurado=$request->get('asegurado');
        $expediente1->areacotiza=$request->get('areacotiza');
        $expediente1->nafiliacion=$request->get('nafiliacion');
        $expediente1->ltrabajo=$request->get('ltrabajo');
        $expediente1->telefonotra=$request->get('telefonotra');
        $expediente1->npadre=$request->get('npadre');
        $expediente1->nmadre=$request->get('nmadre');
        $expediente1->nconyuge=$request->get('nconyuge');
        $expediente1->parentescoresponsable=$request->get('parentescoresponsable');
        $expediente1->nresponsable=$request->get('nresponsable');
        $expediente1->docidentires=$request->get('docidentires');
        $expediente1->ndocidentires=$request->get('ndocidentires');
        $expediente1->direccionres=$request->get('direccionres');
        $expediente1->telefonores=$request->get('telefonores');
        $expediente1->parentescopdatos=$request->get('parentescopdatos');
        $expediente1->nombrepdatos=$request->get('nombrepdatos');
        $expediente1->docidentidadpdatos=$request->get('docidentidadpdatos');
        $expediente1->ndocpdatos=$request->get('ndocpdatos');
        $expediente1->observaciones=$request->get('observaciones'); 
        $expediente1->estado=$idus; 
    
       	$expediente1->update();
       	return Redirect::to('expediente');       	
    }

    public function destroy($id) {
        $expediente1=Expediente::findOrFail($id);
        $expediente1->estado='0';

        $expediente1->update();
        return Redirect::to('expediente');
    }
}
