@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Editar Tipo</h2>
        <div class="row">
            <form action="{{route('admin.tipos.atualizar',$registro->id)}}" method="post">
                
                {{csrf_field()}}

                <input type="hidden" name="_method" value="put">
                
                @include('admin.tipos._form')

                <button class="btn blue">Atualizar</button>

            </form>
        </div>
    </div>

@endsection