@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Adicionar Cidades</h2>
        <div class="row">
            <form action="{{route('admin.cidades.salvar')}}" method="post">
                {{csrf_field()}}

                @include('admin.cidades._form')

                <button class="btn blue">Adicionar</button>

            </form>
        </div>
    </div>

@endsection