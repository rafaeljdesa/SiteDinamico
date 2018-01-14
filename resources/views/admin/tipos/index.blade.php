@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Tipos</h2>
    

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)  
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>
                            <a class="btn orange" href="{{route('admin.tipos.editar', $registro->id)}}"><i class="material-icons">mode_edit</i></a>
                            <a class="btn red" href="javascript: if(confirm('Deseja deletar este usuário?')){window.location.href = '{{ route('admin.tipos.deletar',$registro->id) }}' }"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>    
        </div>
        <div class="row">
                <a class="btn blue" href="{{route('admin.tipos.adicionar')}}">Adicionar</a>
        </div>
    </div>

@endsection