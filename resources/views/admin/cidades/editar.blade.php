@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Editar Cidades</h2>
        <div class="row">
            <form action="{{route('admin.cidades.atualizar',$registro->id)}}" method="post">
                
                {{csrf_field()}}

                <input type="hidden" name="_method" value="put">
                
                @include('admin.cidades._form')

                <button class="btn blue">Atualizar</button>

            </form>
        </div>
    </div>

@endsection