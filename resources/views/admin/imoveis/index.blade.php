@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Imóveis</h2>
    

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Status</th>
                        <th>Cidade</th>
                        <th>Valor</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)  
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->status}}</td>
                        <td>{{$registro->cidade->nome}}</td>
                        <td>R${{number_format($registro->valor,2,",",".")}}</td>
                        <td><img width="100" src="{{asset($registro->imagem)}}" alt=""></td>
                        <td>{{$registro->publicar}}</td>
                        <td>
                            <a class="btn orange" href="{{route('admin.imoveis.editar', $registro->id)}}"><i class="material-icons">mode_edit</i></a>
                            <a class="btn red" href="javascript: if(confirm('Deseja deletar esta cidade?')){window.location.href = '{{ route('admin.imoveis.deletar',$registro->id) }}' }"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>    
        </div>
        <div class="row">
                <a class="btn blue" href="{{route('admin.imoveis.adicionar')}}">Adicionar</a>
        </div>
    </div>

@endsection