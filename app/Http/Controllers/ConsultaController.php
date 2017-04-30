<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Consulta;
use CandyLily\Expediente;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\ConsultaFormRequest;
use DB;
use Auth;

class ConsultaController extends Controller
{
     public function __construct() {

    }

    public function index(Request $request) {
    	if($request) {
    		$query=trim($request->get('searchText'));
    		$consulta1=DB::table('expediente')
            ->where('nombre', 'LIKE', '%'.$query.'%')            
            ->orderBy('id','asc')
            ->paginate(5);

            return view('consulta.index',["consultas"=>$consulta1,"searchText"=>$query]);
    	}
    }

    public function create() {
        return view("consulta.create");
    }

    public function store(ConsultaFormRequest $request) {
        $idus=Auth::id();
        $usuario1=new Consulta;
        $usuario1->nexpediente=$request->get('nexpediente');
        $usuario1->fconsulta=$request->get('fconsulta');
        $usuario1->procedencia=$request->get('procedencia');
        
        if ($request->get('si')==true) {
          $usuario1->si=1;
          $usuario1->no=0;        
        } else {
          $usuario1->si=0;
          $usuario1->no=1;        
        }

        if ($request->get('pv')==true) {
          $usuario1->pv=1;
          $usuario1->ss=0;        
        } else {
          $usuario1->pv=0;
          $usuario1->ss=1;        
        }
                
        $usuario1->fim=$request->get('fim');
        $usuario1->fio=$request->get('fio');
        
        if ($request->get('vf1')==true) {
          $usuario1->vf1=1;
          $usuario1->vf2=0;        
        } else {
          $usuario1->vf1=0;
          $usuario1->vf2=1;        
        }

        $usuario1->amenorrea=$request->get('amenorrea');                
        
        if ($request->get('av1')==true) {
          $usuario1->av1=1;
          $usuario1->av2=0;        
        } else {
          $usuario1->av1=0;
          $usuario1->av2=1;        
        }

        if ($request->get('at1')==true) {
          $usuario1->at1=1;
          $usuario1->at2=0;        
        } else {
          $usuario1->at1=0;
          $usuario1->at2=1;        
        }        
       
        $usuario1->diagnostico=$request->get('diagnostico');
        $usuario1->tratamiento=$request->get('tratamiento');
        $usuario1->ebase=$request->get('ebase');
        $usuario1->observaciones=$request->get('observaciones');
        $usuario1->idmedi=$idus;

        $usuario1->save();
        return Redirect::to('consulta');
    }
    
    public function modificar($id){
      return view("consulta.modificar", ["consulta"=>Consulta::findOrFail($id)]);
    }

    public function show($id) {
        return view("consulta.show", ["consulta"=>Consulta::findOrFail($id)]);
    }

    public function edit($id) {
        return view("consulta.edit", ["consulta"=>Consulta::findOrFail($id)]);
    }

    public function update(ConsultaFormRequest $request,$id) {

      $usuario1=Consulta::findOrFail($id);

      $usuario1->nombre=$request->get('name');
      $usuario1->apellido=$request->get('apellido');
      $usuario1->dui=$request->get('dui');
      $usuario1->direccion=$request->get('direccion');
      $usuario1->telefono=$request->get('telefono');
      $usuario1->email=$request->get('email');
      $usuario1->idcargo=$request->get('idcargo');

      $usuario1->update();
      return Redirect::to('consulta');

    }

    public function destroy($id) {
        $usuario1=Consulta::findOrFail($id);
        $usuario1->estado='0';

        $usuario1->update();
        return Redirect::to('consulta');
    }

    public function llenadoProducto2($codigopro) {
      $productor=Expediente::where('nexpediente',$codigopro)->get();
      $productor2=Expediente::find($productor[0]->id);

      return response()->json($productor2->toArray());
    }  
}
