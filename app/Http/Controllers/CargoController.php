<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;
use CandyLily\Http\Requests;
use CandyLily\Cargo;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\CargoFormRequest;
use DB;


class CargoController extends Controller
{
  public function __construct() {

  }
  public function index(Request $request){
    if($request) {
      $query=trim($request->get('searchText'));//busqueda

      $cargos=DB::table('cargo')
          ->where('nombre', 'LIKE', '%'.$query.'%')
          ->where('estado', '=', '1')
          ->orderBy('nombre','asc')
          ->paginate(5);

          return view('cargo.index',["cargos"=>$cargos,"searchText"=>$query]);
       }
  }
  public function create(){

    return view('cargo.create');
  }

  public function store (CargoFormRequest $request){

    $cargos=new Cargo;
    $cargos->nombre=$request->get('nombre');
    $cargos->estado='1';
    if($request->get('verpaciente')== null){
      $cargos->verpaciente='f';
    }else{
      $cargos->verpaciente=$request->get('verpaciente');
    }
    if($request->get('modpaciente')== null){
      $cargos->modpaciente='f';
    }else{
      $cargos->modpaciente=$request->get('modpaciente');
    }
    if($request->get('verconsulta')== null){
      $cargos->verconsulta='f';
    }else{
      $cargos->verconsulta=$request->get('verconsulta');
    }
    if($request->get('vercitas')== null){
      $cargos->vercitas='f';
    }else{
      $cargos->vercitas=$request->get('vercitas');
    }
    if($request->get('modconsulta')== null){
      $cargos->modconsulta='f';
    }else{
      $cargos->modconsulta=$request->get('modconsulta');
    }
    if($request->get('modcitas')== null){
      $cargos->modcitas='f';
    }else{
      $cargos->modcitas=$request->get('modcitas');
    }
    if($request->get('verunidad')== null){
      $cargos->verunidad='f';
    }else{
      $cargos->verunidad=$request->get('verunidad');
    }
    if($request->get('modunidad')== null){
      $cargos->modunidad='f';
    }else{
      $cargos->modunidad=$request->get('modunidad');
    }
    if($request->get('vertratamiento')== null){
      $cargos->vertratamiento='f';
    }else{
      $cargos->vertratamiento=$request->get('vertratamiento');
    }
    if($request->get('modtratamiento')== null){
      $cargos->modtratamiento='f';
    }else{
        $cargos->modtratamiento=$request->get('modtratamiento');
    }
    if($request->get('verdiagnostico')== null){
      $cargos->verdiagnostico='f';
    }else{
          $cargos->verdiagnostico=$request->get('verdiagnostico');
    }
    if($request->get('moddiagnostico')== null){
      $cargos->moddiagnostico='f';
    }else{
          $cargos->moddiagnostico=$request->get('moddiagnostico');
    }
    if($request->get('verusuario')== null){
      $cargos->verusuario='f';
    }else{
          $cargos->verusuario=$request->get('verusuario');
    }
    if($request->get('modusuario')== null){
      $cargos->modusuario='f';
    }else{
          $cargos->modusuario=$request->get('modusuario');
    }
    if($request->get('vercargo')== null){
      $cargos->vercargo='f';
    }else{
            $cargos->vercargo=$request->get('vercargo');
    }
    if($request->get('modcargo')== null){
      $cargos->modcargo='f';
    }else{
            $cargos->modcargo=$request->get('modcargo');
    }
    if($request->get('verespaldo')== null){
      $cargos->verespaldo='f';
    }else{
            $cargos->verespaldo=$request->get('verespaldo');
    }
    if($request->get('modrespaldo')== null){
      $cargos->modrespaldo='f';
    }else{
            $cargos->modrespaldo=$request->get('modrespaldo');
    }
    if($request->get('verbitacora')== null){
      $cargos->verbitacora='f';
    }else{
            $cargos->verbitacora=$request->get('verbitacora');
    }

    $cargos->save();
    return Redirect::to('cargo');
  }
  public function show($id){
    return view('cargo.show',['cargo'=>Cargo::findOrFail($id)]);

  }
  public function edit($id){
    return view('cargo.edit',['cargo'=>Cargo::findOrFail($id)]);
  }
  public function update(Request $request,$id){
  //  $cargos= Cargo::findOrFail($id);

    $cargos = Cargo::find($id);

    $aux=$request->get('modificar');
    if($aux==1)
    {

            $cargos->nombre=$request->get('nombre');
            if($request->get('verpaciente')== null){
              $cargos->verpaciente='f';
            }else{
              $cargos->verpaciente=$request->get('verpaciente');
            }
            if($request->get('modpaciente')== null){
              $cargos->modpaciente='f';
            }else{
              $cargos->modpaciente=$request->get('modpaciente');
            }
            if($request->get('verconsulta')== null){
              $cargos->verconsulta='f';
            }else{
              $cargos->verconsulta=$request->get('verconsulta');
            }
            if($request->get('vercitas')== null){
              $cargos->vercitas='f';
            }else{
              $cargos->vercitas=$request->get('vercitas');
            }
            if($request->get('modconsulta')== null){
              $cargos->modconsulta='f';
            }else{
              $cargos->modconsulta=$request->get('modconsulta');
            }
            if($request->get('modcitas')== null){
              $cargos->modcitas='f';
            }else{
              $cargos->modcitas=$request->get('modcitas');
            }
            if($request->get('verunidad')== null){
              $cargos->verunidad='f';
            }else{
              $cargos->verunidad=$request->get('verunidad');
            }
            if($request->get('modunidad')== null){
              $cargos->modunidad='f';
            }else{
              $cargos->modunidad=$request->get('modunidad');
            }
            if($request->get('vertratamiento')== null){
              $cargos->vertratamiento='f';
            }else{
              $cargos->vertratamiento=$request->get('vertratamiento');
            }
            if($request->get('modtratamiento')== null){
              $cargos->modtratamiento='f';
            }else{
                $cargos->modtratamiento=$request->get('modtratamiento');
            }
            if($request->get('verdiagnostico')== null){
              $cargos->verdiagnostico='f';
            }else{
                  $cargos->verdiagnostico=$request->get('verdiagnostico');
            }
            if($request->get('moddiagnostico')== null){
              $cargos->moddiagnostico='f';
            }else{
                  $cargos->moddiagnostico=$request->get('moddiagnostico');
            }
            if($request->get('verusuario')== null){
              $cargos->verusuario='f';
            }else{
                  $cargos->verusuario=$request->get('verusuario');
            }
            if($request->get('modusuario')== null){
              $cargos->modusuario='f';
            }else{
                  $cargos->modusuario=$request->get('modusuario');
            }
            if($request->get('vercargo')== null){
              $cargos->vercargo='f';
            }else{
                    $cargos->vercargo=$request->get('vercargo');
            }
            if($request->get('modcargo')== null){
              $cargos->modcargo='f';
            }else{
                    $cargos->modcargo=$request->get('modcargo');
            }
            if($request->get('verespaldo')== null){
              $cargos->verespaldo='f';
            }else{
                    $cargos->verespaldo=$request->get('verespaldo');
            }
            if($request->get('modrespaldo')== null){
              $cargos->modrespaldo='f';
            }else{
                    $cargos->modrespaldo=$request->get('modrespaldo');
            }
            if($request->get('verbitacora')== null){
              $cargos->verbitacora='f';
            }else{
                    $cargos->verbitacora=$request->get('verbitacora');
            }
  }else if($aux==2){
      # code...
      $cargos->estado='0';

    }else if($aux==3){
        # code...
        $cargos->estado='1';
        $cargos->save();
        //$cargos->update();

        return Redirect::to('cargobaja');
      }

    $cargos->save();
    //$cargos->update();
    return Redirect::to('cargo');

  }
  public function destroy($id){
    $cargos=Cargo::findOrFail($id);
    $cargos->estado='0';
    $cargos->update();
    return Redirect::to('cargo');

  }



 public function indexup(Request $request){
    if($request) {
      $query=trim($request->get('searchText'));//busqueda

      $cargos=DB::table('cargo')
          ->where('nombre', 'LIKE', '%'.$query.'%')
          ->where('estado', '=', '0')
          ->orderBy('nombre','asc')
          ->paginate(5);

          return view('cargo.index',["cargos"=>$cargos,"searchText"=>$query]);
       }
  }

}
