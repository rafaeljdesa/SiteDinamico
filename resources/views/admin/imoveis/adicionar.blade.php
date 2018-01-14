<!--enctype serve  para trabalhar com imágens-->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Adicionar Imóvel</h2>
        <div class="row">
            <form action="{{route('admin.imoveis.salvar')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                @include('admin.imoveis._form')

                <button class="btn blue">Adicionar</button>

            </form>
        </div>
    </div>

@endsection