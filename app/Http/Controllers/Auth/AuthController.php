<?php

namespace CandyLily\Http\Controllers\Auth;

use CandyLily\Usuario;
use Validator;
use CandyLily\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function __construct()
    {        
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function postLogin(Request $request) {        
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'estado'=>1
            ], $request->has('remember'))) {
                return redirect()->intended($this->redirectPath());                
        } else {
            $rules=[
            'email'=>'required',
            'password'=>'required'];
            
            $messages=[
            'email.required'=>'El campo e-mail es requerido',
            'password'=>'El campo contraseña es requerido'];
            $validator=Validator::make($request->all(), $rules,$messages);
            return redirect('login')->with('message','Credenciales no validas');
        }
    }
}