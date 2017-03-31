<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Diagnostico;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\DiagnosticoFormRequest;
use DB;

class DiagnosticoController extends Controller
{
 	public function __construct() {

    }

    public function index(Request $request) {
    	if($request) {
    		$query=trim($request->get('searchText'));
    		$diagnostico1=DB::table('diagnostico')
            ->where('codigo', 'LIKE', '%'.$query.'%')            
            ->where('nombre', 'LIKE', '%'.$query.'%')  
            ->where('estado', '=', '1')
            ->orderBy('codigo','asc')
            ->paginate(5);

            return view('diagnostico.index',["diagnosticos"=>$diagnostico1,"searchText"=>$query]);
    	}        
    } 

    public function create() {
        return view("diagnostico.create");
    }    

    public function store(DiagnosticoFormRequest $request) {
        $diagnostico1=new Diagnostico;
        $diagnostico1->codigo=$request->get('codigo');
        $diagnostico1->nombre=$request->get('nombre');        
        $diagnostico1->estado='1';

        $diagnostico1->save();
        return Redirect::to('diagnostico');

    }

    public function show($id) {
        return view("diagnostico.show", ["diagnostico"=>Diagnostico::findOrFail($id)]);
    }

    public function edit($id) {    
        return view("diagnostico.edit", ["diagnostico"=>Diagnostico::findOrFail($id)]);
    }

    public function update(DiagnosticoFormRequest $request,$id) {
        $diagnostico1=Diagnostico::findOrFail($id);
               	
        $diagnostico1->codigo=$request->get('codigo');
   		$diagnostico1->nombre=$request->get('nombre');
    
       	$diagnostico1->update();
       	return Redirect::to('diagnostico');       	
    }

    public function destroy($id) {
        $diagnostico1=Diagnostico::findOrFail($id);
        $diagnostico1->estado='0';

        $diagnostico1->update();
        return Redirect::to('diagnostico');
    }
}
