<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Usuarioinac;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\UsuarioinacFormRequest;
use CandyLily\Usuario;
use CandyLily\Usuarioinac;
use DB;
use Session;

class UsuarioinacController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
    	if($request) {
    		$query=trim($request->get('searchText'));
    		$usuario1=DB::table('users')
            ->where('name', 'LIKE', '%'.$query.'%')
            ->where('estado', '=', '0')
            ->orderBy('id','asc')
            ->paginate(5);

            return view('usuarioinac.index',["usuarios"=>$usuario1,"searchText"=>$query]);
    	}
    }

    public function create() {
        return view("usuarioinac.create");
    }

    public function store(UsuarioFormRequest $request) {
        $usuario1=new Usuarioinac;
        $usuario1->name=$request->get('name');
        $usuario1->apellido=$request->get('apellido');
        $usuario1->dui=$request->get('dui');
        $usuario1->direccion=$request->get('direccion');
        $usuario1->telefono=$request->get('telefono');
        $usuario1->email=$request->get('email');
        $usuario1->civil=$request->get('civil');
        $usuario1->sexo=$request->get('sexo');
        $usuario1->username=$request->get('username');
        $usuario1->password=$request->get('password');
        $usuario1->estado='1';
        $usuario1->idcargo=$request->get('cargo');
        $usuario1->remember_token=str_random(100);

        $usuario1->save();
        return Redirect::to('usuarioinac');

    }

    public function show($id) {
        return view("usuarioinac.show", ["usuario"=>Usuarioinac::findOrFail($id)]);
    }

    public function edit($id) {
        return view("usuarioinac.edit", ["usuario"=>Usuarioinac::findOrFail($id)]);
    }

    public function update(UsuarioinacFormRequest $request,$id) {

      $usuario1=Usuario::findOrFail($id);


            if($request->get('password') == $request->get('password_confirmation')){

              $usuario1->username = $request->get('username');
              $usuario1->password = bcrypt($request->get('password'));
              $usuario1->update();

              return Redirect::to('usuario');
              Session::flash('mensaje','¡Actualizacion exitosa!');
            }




    }
    //Dr0y3Y
    public function showAuth($id) {
        return view("usuarioinac.showAuth", ["usuario"=>Usuario::findOrFail($id)]);
    }


    public function destroy($id) {
        $usuario1=Usuarioinac::findOrFail($id);
        $usuario1->estado='1';

        $usuario1->update();
        return Redirect::to('usuarioinac');
    }
}
