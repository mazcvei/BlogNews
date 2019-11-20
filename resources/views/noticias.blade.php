@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header alert-dark">Nueva noticia</div>
                    <div class="card-body">
                        <form class="form-group" action="{{route('nueva.noticia')}}" method="post">
                            @csrf
                            <label for="titulo">Titulo:</label>
                            <input class="form-control" type="text" name="titulo">
                            <label for="noticia">Noticia:</label>
                            <textarea class="form-control" type="text" name="texto" rows="2"></textarea>

                            <label for="image">Imagen:</label>
                            <input type="file" name="image">
                            <label for="categoria">Categoría:</label>
                            <select class="form-control" name="categoria">
                                @foreach($categorias as $categoria)
                                    <option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                            <input type="submit" class="btn btn-primary" value="Enviar" id="envio">
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-8" style="background-color: red">
                <h2 class="text-center">Noticias</h2>
                @foreach ($noticias as $noticia)
                    <div class="card mb-3">
                        <div class="card-header alert-dark">{{$noticia->titulo}}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{$noticia->texto}}
                        </div>
                        <div class="card-footer">
                            {{$noticia->categoria}} | {{$noticia->created_at}} |
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
