@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Cidades</h2>
    

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Estado</th>
                        <th>Sigla</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)  
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->nome}}</td>
                        <td>{{$registro->estado}}</td>
                        <td>{{$registro->sigla_estado}}</td>
                        <td>
                            <a class="btn orange" href="{{route('admin.cidades.editar', $registro->id)}}"><i class="material-icons">mode_edit</i></a>
                            <a class="btn red" href="javascript: if(confirm('Deseja deletar esta cidade?')){window.location.href = '{{ route('admin.cidades.deletar',$registro->id) }}' }"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>    
        </div>
        <div class="row">
                <a class="btn blue" href="{{route('admin.cidades.adicionar')}}">Adicionar</a>
        </div>
    </div>

@endsection