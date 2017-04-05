<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Http\Requests\UnidadFormRequest;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Enfermedad;
use CandyLily\Unidad;
use DB;

class EnfermedadController extends Controller
{
  public function __construct() {

    }

    public function index(Request $request) {
      if($request) {
        $query=trim($request->get('searchText'));
        $enfermedades=DB::table('enfermedad')
            ->where('nombre', 'LIKE', '%'.$query.'%')
            ->where('estado', '=', '1')
            ->orderBy('codigo','asc')
            ->paginate(5);

            return view('enfermedad.index',["enfermedades"=>$enfermedades,"searchText"=>$query]);
      }
    }

    public function create() {
        return view("enfermedad.create");
    }

    public function store(UnidadFormRequest $request) {
        $enfermedad=new Enfermedad;
        $enfermedad->codigo=$request->get('codigo');
        $enfermedad->nombre=$request->get('nombre');
        $enfermedad->estado='1';

        $enfermedad->save();
        return Redirect::to('enfermedad');

    }

    public function show($id) {
        return view("enfermedad.show", ["enfermedades"=>Enfermedad::findOrFail($id)]);
    }

    public function edit($id) {
        return view("enfermedad.edit", ["enfermedades"=>Enfermedad::findOrFail($id)]);
    }

    public function update(Request $request,$id) {
      $enfermedad=Enfermedad::findOrFail($id);
      $aux=$request->get('modificar');
      if($aux==1)
      {
        $enfermedad->codigo=$request->get('codigo');
        $enfermedad->nombre=$request->get('nombre');
      }else if($aux==2){
          # code...
          $enfermedad->estado='0';

        }else if($aux==3){
            # code...
            $enfermedad->estado='1';
            $enfermedad->save();
            return Redirect::to('enfermedadbaja');
          }

          $enfermedad->update();
          return Redirect::to('enfermedad');

    }

    public function destroy($id) {
        $enfermedad=Enfermedad::findOrFail($id);
        $enfermedad->estado='0';

        $enfermedad->update();
        return Redirect::to('enfermedad');
    }
    public function indexup(Request $request){
       if($request) {
         $query=trim($request->get('searchText'));//busqueda

         $enfermedades=DB::table('enfermedad')
             ->where('nombre', 'LIKE', '%'.$query.'%')
             ->where('estado', '=', '0')
             ->orderBy('codigo','asc')
             ->paginate(5);

             return view('enfermedad.index',["enfermedades"=>$enfermedades,"searchText"=>$query]);
          }
     }
}
