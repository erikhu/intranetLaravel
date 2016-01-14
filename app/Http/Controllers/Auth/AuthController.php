<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    private $redirectTo = '/';    

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'tipo_usuario' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {                        
        if(array_key_exists('seccionPrimaria', $data)){
            $seccionPrimaria = "on";
        } else {
            $seccionPrimaria = "off";
        }
           
        if(array_key_exists('seccionSecundaria', $data)){
            $seccionSecundaria = "on";
        } else {
            $seccionSecundaria = "off";
        }
           
        if(array_key_exists('proyHuellas', $data)){
            $proyHuellas = "on";
        } else {
            $proyHuellas = "off";
        }
           
        if(array_key_exists('proyJMF', $data)){
            $proyJMF = "on";
        } else {
            $proyJMF = "off";
        }
        
        if(array_key_exists('tutor', $data)){
            $tutor = $data['tutor'];
        } else {
            $tutor = "";
        }
        
        if(array_key_exists('religion', $data)){
            $religion = $data['religion'];
        } else {
            $religion = "";
        }                
        
        return User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'colegio' => $data['colegio'],
            'grado' => $data['grado'],  
            'seccion_primaria' => $seccionPrimaria,
            'seccion_secundaria' => $seccionSecundaria,
            'docente_tutor' => $tutor,
            'docente_religion' => $religion,
            'cargo' => $data['optionsRadios'],
            'password' => bcrypt($data['password']),
            'proyecto_huellas' => $proyHuellas,
            'proyecto_jmf' => $proyJMF,
            'tipo_usuario' => $data['tipo_usuario'],            
        ]);
    }
    
    public function loginPath(){        
        return route('/');
    }            
}
