<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    public function login(Request $request){

    	$dados=$request->all(); // pegando todos parametros do request
    	//dd($dados);     //tipo um var_dup, add um exit final
    	if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])) {
    	    \Session::flash('mensagem',['msg'=>'Login relaiazado com sucesso!', 'class'=>'green wgite-text']);
            return redirect()->route('admin.principal');
        }
        \Session::flash('mensagem',['msg'=>'Erro! Confira seus dados', 'class'=>'red wgite-text']);
        return redirect()->route('admin.login');

    }


    public function sair(Request $request){

        Auth::logout();
        return redirect()->route('admin.login');

    }


}
