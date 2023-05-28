@extends('layouts.main')
@extends('partials.css')
@extends('partials.svg')
@extends('partials.dropdown')
@extends('partials.scripts')
@extends('partials.nav')
@extends('partials.sidebar')
@section('title', 'Informacion de Película')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Informacion de Película</h1>
        </div>
        <div class="container">
            <br>
            <hr>
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <form action="/film" method="POST">
                        @method('put')
                        {{ csrf_field() }}
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-film"></i> </span>
                            </div>
                            <input name="film_id" class="form-control" placeholder="Titulo" type="text" value="{{$film->film_id}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-film"></i> </span>
                            </div>
                            <input name="title" class="form-control" placeholder="Titulo" type="text" value="{{$film->title}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-comments"></i> </span>
                            </div>
                            <input name="description" class="form-control" placeholder="Descripcion" type="text" value="{{$film->description}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                            </div>
                            <input name="release_year" class="form-control" placeholder="Año de Publicación" type="text" value="{{$film->release_year}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-language"></i> </span>
                            </div>
                            <input name="language_id" class="form-control" placeholder="Idioma" type="text" value="1">
                        </div><!-- form-group end.// -->
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-language"></i> </span>
                            </div>
                            <input name="original_language_id" class="form-control" placeholder="Idioma" type="text" value="1">
                        </div> <!-- form-group end.// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-clock"></i> </span>
                            </div>
                            <input name="length" class="form-control" placeholder="Duración" type="text" value="{{$film->length}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-info"></i> </span>
                            </div>
                            <input name="special_features" class="form-control" placeholder="Caracteristicas" type="text" value="{{$film->specials}}">
                        </div> <!-- form-group// -->
                        <br>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="submit" class="btn btn-sm btn-outline-success">Guardar</button>
                                <a href="/film" class="btn btn-sm btn-outline-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </article>
            </div> <!-- card.// -->
        </div>
        <!--container end.//-->
    </main>
@endsection
