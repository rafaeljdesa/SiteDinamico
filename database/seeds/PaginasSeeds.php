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
    public function run(){
        $existe = Pagina::where('tipo','=','sobre')->count();

        if($existe){
            $paginasobre = Pagina::where('tipo','=','sobre')->first();
        }else{
            $paginasobre = new Pagina();
        }

        $paginasobre->titulo = "A empresa";
        $paginasobre->descricao = "Descrição";
        $paginasobre->texto = "Texto";
        $paginasobre->imagem = "img/modelo_img_home.jpg";
        $paginasobre->tipo = "sobre";
        $paginasobre->save();

        $existe = Pagina::where('tipo','=','contato')->count();

        if($existe){
            $paginaContato = Pagina::where('tipo','=','contato')->first();
        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulário";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaContato->email = "teste@gmail.com";
        $paginaContato->tipo = "contato";
        $paginaContato->save();
    }
}
