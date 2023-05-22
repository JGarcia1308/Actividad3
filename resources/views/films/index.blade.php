@extends('layouts.main')
@extends('partials.css')
@extends('partials.svg')
@extends('partials.dropdown')
@extends('partials.scripts')
@extends('partials.nav')
@extends('partials.sidebar')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Peliculas</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/film/create" class="btn btn-sm btn-outline-success">Nuevo</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Duracion</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Actores</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <td>{{ $film->FID }}</td>
                            <td>{{ $film->title }}</td>
                            <td>{{ $film->descripcion }}</td>
                            <td>{{ $film->category }}</td>
                            <td>{{ $film->price }}</td>
                            <td>{{ $film->length }}</td>
                            <td>{{ $film->rating }}</td>
                            <td>{{ $film->actors }}</td>
                            <td>
                                <div>
                                    <a href="/film/{{$film->FID}}" class="btn btn-sm btn-outline-info">Ver</a>
                                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Borrar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
