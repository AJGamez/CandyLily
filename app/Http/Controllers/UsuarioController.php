<?php

namespace CandyLily\Http\Controllers;

use Illuminate\Http\Request;

use CandyLily\Http\Requests;
use CandyLily\Usuario;
use Illuminate\Support\Facades\Redirect;
use CandyLily\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
    	if($request) {
    		$query=trim($request->get('searchText'));
    		$usuario1=DB::table('users')
            ->where('name', 'LIKE', '%'.$query.'%')
            ->where('estado', '=', '1')
            ->orderBy('id','asc')
            ->paginate(5);

            return view('usuario.index',["usuarios"=>$usuario1,"searchText"=>$query]);
    	}        
    }

    public function create() {
        return view("usuario.create");
    }    

    public function store(UsuarioFormRequest $request) {
        $usuario1=new Usuario;
        $usuario1->name=$request->get('name');
        $usuario1->apellido=$request->get('apellido');
        $usuario1->dui=$request->get('dui');
        $usuario1->direccion=$request->get('direccion');
        $usuario1->telefono=$request->get('telefono');
        $usuario1->email=$request->get('email');
        $usuario1->civil=$request->get('civil');
        $usuario1->sexo=$request->get('sexo');
        $usuario1->username=$request->get('username');
        $usuario1->password=bcrypt($request->get('password'));
        $usuario1->estado='1';        
        $usuario1->idcargo=$request->get('cargo');
        $usuario1->remember_token=str_random(100);

        $usuario1->save();
        return Redirect::to('usuario');

    }

    public function show($id) {
        return view("usuario.show", ["usuario"=>Usuario::findOrFail($id)]);
    }

    public function edit($id) {
        return view("usuario.edit", ["usuario"=>Usuario::findOrFail($id)]);
    }

    public function update(UsuarioFormRequest $request,$id) {
        $usuario1=Usuario::findOrFail($id);
        $usuario1->nombre=$request->get('name');
        $usuario1->apellido=$request->get('apellido');
        $usuario1->dui=$request->get('dui');
        $usuario1->direccion=$request->get('direccion');
        $usuario1->telefono=$request->get('telefono');
        $usuario1->email=$request->get('email');
        $usuario1->idcargo=$request->get('idcargo');

        $usuario1->update();
        return Redirect::to('usuario');
    }

    public function destroy($id) {
        $usuario1=Usuario::findOrFail($id);
        $usuario1->estado='0';

        $usuario1->update();
        return Redirect::to('usuario');
    }

    public function Cerrar_Logout() {        
        Auth::logout();    
        return Redirect::to('/login');
    }
}