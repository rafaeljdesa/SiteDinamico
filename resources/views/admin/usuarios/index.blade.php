@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Usuários</h2>
    

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)  
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            <a class="btn orange" href="{{route('admin.usuarios.editar', $usuario->id)}}"><i class="material-icons">mode_edit</i></a>
                            <a class="btn red" href="javascript: if(confirm('Deseja deletar este usuário?')){window.location.href = '{{ route('admin.usuarios.deletar',$usuario->id) }}' }"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>    
        </div>
        <div class="row">
                <a class="btn blue" href="{{route('admin.usuarios.adicionar')}}">Adicionar</a>
        </div>
    </div>

@endsection