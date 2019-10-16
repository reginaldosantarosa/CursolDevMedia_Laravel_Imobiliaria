<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo;
use App\Imovel;

class TipoController extends Controller
{

    public function index(){
        $registros=Tipo::all();
        return view('admin.tipos.index',compact('registros'));
    }

    public function login(Request $request){

        $dados=$request->all(); // pegando todos parametros do request

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

    public function adicionar(){
        return view('admin.tipos.adicionar');
    }

    public function salvar(Request $request){

        $dados=$request->all();
        $registro = new Tipo();
        $registro->titulo=$dados['titulo'];
        $registro->save();
        \Session::flash('mensagem',['msg'=>'Registro Criado com sucesso!', 'class'=>'green wgite-text']);

        return redirect()->route('admin.tipos');
    }

    public function editar($id){
        $registro=Tipo::find($id);
        return view('admin.tipos.editar',compact('registro'));
    }

    public function deletar($id){


            if(Imovel::where('tipo_id','=',$id)->count()){

            $msg="Não é possivel deletar essa tipo  de imovel! Esses imoveis (";
            
            $imoveis=Imovel::where('tipo_id','=',$id)->get();
           

            foreach($imoveis as $imovel){
                $msg.="id:".$imovel->id . " ";
            }
            $msg.=") estao relacionados";

        \Session::flash('mensagem',['msg'=>$msg, 'class'=>'red wgite-text']);

        return redirect()->route('admin.tipos');
        }
 

        Tipo::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!', 'class'=>'green wgite-text']);

        return redirect()->route('admin.tipos');
    }

    public function atualizar(Request $request,$id){
        $registro=Tipo::find($id);
        $dados=$request->all();

        $registro->titulo=$dados['titulo'];
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!', 'class'=>'green wgite-text']);

        return redirect()->route('admin.tipos');
    }
}
