@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        @foreach($cursos as $item)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img width="300" src="{{$item->imagem }}">
                    </div>
                    <div class="card-content">
                        <h3>{{$item->titulo}}</h3>
                        <p>{{$item->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver Mais</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
@endsection
