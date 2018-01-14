@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Editar Imóvel</h2>
        <div class="row">
            <form action="{{route('admin.imoveis.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
                
                {{csrf_field()}}

                <input type="hidden" name="_method" value="put">
                
                @include('admin.imoveis._form')

                <button class="btn blue">Atualizar</button>

            </form>
        </div>
    </div>

@endsection