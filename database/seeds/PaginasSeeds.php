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
        $existe = Pagina::where('tipo','=','sobre')->count();

        if($existe){
            $paginasobre = Pagina::where('tipo','=','sobre')->first();
        }else{
            $paginasobre = new Pagina();
        }

        $paginasobre->titulo = "A empresa";
        $paginasobre->descricao = "Descrição";
        $paginasobre->texto = "Texto";
        $paginasobre->imagem = "site/img/modelo_img_home.jpg";
        $paginasobre->tipo = "sobre";
        $paginasobre->save();
    }
}
