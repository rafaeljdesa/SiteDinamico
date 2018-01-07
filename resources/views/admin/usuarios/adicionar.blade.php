@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Adicionar Usuário</h2>
        <div class="row">
            <form action="{{route('admin.usuarios.salvar')}}" method="post">
                {{csrf_field()}}

                @include('admin.usuarios._form')

                <button class="btn blue">Adicionar</button>

            </form>
        </div>
    </div>

@endsection