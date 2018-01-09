@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Páginas</h2>
    

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tíutulo</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($paginas as $pagina)  
                    <tr>
                        <td>{{$pagina->id}}</td>
                        <td>{{$pagina->titulo}}</td>
                        <td>{{$pagina->descricao}}</td>
                        <td>{{$pagina->tipo}}</td>
                        <td>
                            <a class="btn orange" href="{{route('admin.paginas.editar', $pagina->id)}}"><i class="material-icons">mode_edit</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>    
        </div>
    </div>

@endsection