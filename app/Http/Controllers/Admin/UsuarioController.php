<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

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


    }    public function index(){

        $usuarios=User::all();

             return view('admin.usuarios.index',compact('usuarios'));
    }

    public function adicionar(){
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request){

        $dados=$request->all();
         $usuario = new User();
         $usuario->name=$dados['name'];
         $usuario->email=$dados['email'];
         $usuario->password= bcrypt($dados['password']);

        $usuario->save();

        \Session::flash('mensagem',['msg'=>'Registro Criado com sucesso!', 'class'=>'green wgite-text']);

        return redirect()->route('admin.usuarios');
    }

    public function editar($id){
        $usuario=User::find($id);
        return view('admin.usuarios.editar',compact('usuario'));

    }

    public function deletar($id){

         User::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!', 'class'=>'green wgite-text']);

        return redirect()->route('admin.usuarios');
    }

    public function atualizar(Request $request,$id){
        $usuario=User::find($id);
        $dados=$request->all();
        if (isset($dados['password']) && strlen($dados['password'])> 5){
            $dados['password']= bcrypt($dados['password']);
        }
        else{
            unset($dados['password']);
        }

        $usuario->update($dados);

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!', 'class'=>'green wgite-text']);

        return redirect()->route('admin.usuarios');
    }
}
