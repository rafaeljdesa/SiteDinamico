<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', ['as' => 'site.home', function(){
    return view('site.home');
}]);

Route::get('/sobre', ['as' => 'site.sobre', 'uses'=>'Site\PaginaController@sobre']);

Route::get('/contato', ['as' => 'site.contato', 'uses'=>'Site\PaginaController@contato']);

Route::post('/contato/enviar', ['as' => 'site.contato.enviar', 'uses'=>'Site\PaginaController@enviarContato']);

//titulo? = opcional
Route::get('/imovel/{id}/{titulo?}', ['as' => 'site.imovel', function(){
    return view('site.imovel');
}]);

Route::get('/admin/login', ['as' => 'admin.login', function(){
    return view('admin.login.index');
}]);

Route::post('/admin/login', ['as' => 'login', 'uses' => 'Admin\UsuarioController@login']);

Route::group(['middleware'=>'auth'], function(){

    Route::get('/admin/login/sair',['as'=>'admin.login.sair','uses' =>'Admin\UsuarioController@sair']);
    
    Route::get('/admin', ['as' => 'admin.principal', function(){
        return view('admin.principal.index');
    }]);

    Route::get('/admin/usuarios',['as'=>'admin.usuarios','uses'=>'Admin\UsuarioController@index']);
    
    Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar','uses'=>'Admin\UsuarioController@adicionar']);
    
    Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar','uses'=>'Admin\UsuarioController@salvar']);
    
    Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar','uses'=>'Admin\UsuarioController@editar']);
    
    Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar','uses'=>'Admin\UsuarioController@atualizar']);
    
    Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar','uses'=>'Admin\UsuarioController@deletar']);

    Route::get('/admin/paginas', ['as'=>'admin.paginas', 'uses'=>'Admin\PaginaController@index']);

    Route::get('/admin/paginas/editar/{id}', ['as'=>'admin.paginas.editar','uses'=>'Admin\PaginaController@editar']);

    Route::put('/admin/paginas/atualizar/{id}',['as'=>'admin.paginas.atualizar','uses'=>'Admin\PaginaController@atualizar']);




});



 