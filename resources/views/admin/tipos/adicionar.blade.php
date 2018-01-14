@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Adicionar Tipos</h2>
        <div class="row">
            <form action="{{route('admin.tipos.salvar')}}" method="post">
                {{csrf_field()}}

                @include('admin.tipos._form')

                <button class="btn blue">Adicionar</button>

            </form>
        </div>
    </div>

@endsection