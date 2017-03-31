<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Diagnostico;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\DiagnosticoFormRequest;
use DB;

class DiagnosticoinacController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
    	if($request) {
    		$query=trim($request->get('searchText'));
    		$diagnostico1=DB::table('diagnostico')
            ->where('codigo', 'LIKE', '%'.$query.'%')            
            ->where('nombre', 'LIKE', '%'.$query.'%')  
            ->where('estado', '=', '0')
            ->orderBy('codigo','asc')
            ->paginate(5);

            return view('diagnosticoinac.index',["diagnosticos"=>$diagnostico1,"searchText"=>$query]);
    	}        
    }     

    public function destroy($id) {
        $diagnostico1=Diagnostico::findOrFail($id);
        $diagnostico1->estado='1';

        $diagnostico1->update();
        return Redirect::to('diagnosticoinac');
    }
}
