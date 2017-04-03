<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;
use CandyLily\Http\Requests;
use CandyLily\Http\Requests\tratamientoFormRequest;
use Illuminate\Support\Facades\Redirect;
use CandyLily\tratamiento;
use DB;


class TratamientoController extends Controller
{
  public function __construct() {

    }

    public function index(Request $request) {
      if($request) {
        $query=trim($request->get('searchText'));
        $tratamientos=DB::table('tratamiento')
            ->where('nombre', 'LIKE', '%'.$query.'%')
            ->where('estado', '=', '1')
            ->orderBy('codigo','asc')
            ->paginate(5);

            return view('tratamiento.index',["tratamientos"=>$tratamientos,"searchText"=>$query]);
      }
    }

    public function create() {
        return view("tratamiento.create");
    }

    public function store(TratamientoFormRequest $request) {
        $tratamiento=new Tratamiento;
        $tratamiento->codigo=$request->get('codigo');
        $tratamiento->nombre=$request->get('nombre');
        $tratamiento->estado='1';

        $tratamiento->save();
        return Redirect::to('tratamiento');

    }

    public function show($id) {
        return view("tratamiento.show", ["tratamientos"=>Tratamiento::findOrFail($id)]);
    }

    public function edit($id) {
        return view("tratamiento.edit", ["tratamientos"=>Tratamiento::findOrFail($id)]);
    }

    public function update(Request $request,$id) {
      $tratamiento=Tratamiento::findOrFail($id);
      $aux=$request->get('modificar');
      if($aux==1)
      {
        $tratamiento->codigo=$request->get('codigo');
        $tratamiento->nombre=$request->get('nombre');
      }else if($aux==2){
          # code...
          $tratamiento->estado='0';

        }else if($aux==3){
            # code...
            $tratamiento->estado='1';
            $tratamiento->save();
            return Redirect::to('tratamientobaja');
          }

          $tratamiento->update();
          return Redirect::to('tratamiento');

    }

    public function destroy($id) {
        $tratamiento=Tratamiento::findOrFail($id);
        $tratamiento->estado='0';

        $tratamiento->update();
        return Redirect::to('tratamiento');
    }
    public function indexup(Request $request){
       if($request) {
         $query=trim($request->get('searchText'));//busqueda

         $tratamientos=DB::table('tratamiento')
             ->where('nombre', 'LIKE', '%'.$query.'%')
             ->where('estado', '=', '0')
             ->orderBy('codigo','asc')
             ->paginate(5);

             return view('tratamiento.index',["tratamientos"=>$tratamientos,"searchText"=>$query]);
          }
     }
}
