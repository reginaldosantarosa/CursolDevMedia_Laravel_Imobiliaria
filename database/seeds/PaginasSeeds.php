<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe=Pagina::where('tipo','=','contato')->count(); //contando quantas paginas sobre existem

        if ($existe){
            $paginaContato =Pagina::where('tipo','=','contato')->first(); //pegando uma pagina
        }
        else{
            $paginaContato=new Pagina();
        }

        $paginaContato->titulo="Entre em contato";
        $paginaContato->descricao="Preencha o formulario";
        $paginaContato->texto="Contato";
        $paginaContato->email="1@1";
        $paginaContato->imagem="img/modelo_img_home.jpg";
        $paginaContato->tipo="contato";

        $paginaContato->save();

        echo "Pagina Contrato criada com sucesso";

    }
}
