<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;
use CandyLily\Http\Requests;
use CandyLily\Http\Requests\UnidadFormRequest;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Unidad;
use DB;

class UnidadController extends Controller
{
  public function __construct() {

    }

    public function index(Request $request) {
      if($request) {
        $query=trim($request->get('searchText'));
        $unidades=DB::table('unidad')

            ->where('nombre', 'LIKE', '%'.$query.'%')
            ->where('estado', '=', '1')
            ->orderBy('nombre','asc')
            ->paginate(5);

            return view('unidad.index',["unidades"=>$unidades,"searchText"=>$query]);
      }
    }

    public function create() {
        return view("unidad.create");
    }

    public function store(UnidadFormRequest $request) {
        $unidad=new Unidad;

        $unidad->nombre=$request->get('nombre');
        $unidad->estado='1';

        $unidad->save();
        return Redirect::to('unidad');

    }

    public function show($id) {
        return view("unidad.show", ["unidades"=>Unidad::findOrFail($id)]);
    }

    public function edit($id) {
        return view("unidad.edit", ["unidades"=>Unidad::findOrFail($id)]);
    }

    public function update(Request $request,$id) {
      $unidad=Unidad::findOrFail($id);
      $aux=$request->get('modificar');
      if($aux==1)
      {

        $unidad->nombre=$request->get('nombre');
      }else if($aux==2){
          # code...
          $unidad->estado='0';

        }else if($aux==3){
            # code...
            $unidad->estado='1';
            $unidad->save();
            return Redirect::to('unidadbaja');
          }

          $unidad->update();
          return Redirect::to('unidad');

    }

    public function destroy($id) {
        $unidad=Unidad::findOrFail($id);
        $unidad->estado='0';

        $unidad->update();
        return Redirect::to('unidad');
    }
    public function indexup(Request $request){
       if($request) {
         $query=trim($request->get('searchText'));//busqueda

         $unidades=DB::table('unidad')
             ->where('nombre', 'LIKE', '%'.$query.'%')
             ->where('estado', '=', '0')
             ->orderBy('nombre','asc')
             ->paginate(5);

             return view('unidad.index',["unidades"=>$unidades,"searchText"=>$query]);
          }
     }
}
