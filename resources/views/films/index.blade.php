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
                                    <a href="/film/{{$film->FID}}/edit" class="btn btn-sm btn-outline-warning">Editar</a>
                                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $film->FID }}"
                                        class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($films->links()->paginator->hasPages())
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">{{ $films->links() }}</div>
            <div class="col-6 col-md-4"></div>
        </div>
        @endif
    </main>
@endsection
@foreach ($films as $film)
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop-{{ $film->FID }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-danger">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Pelicula - {{ $film->FID }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <b>Pelicula a Eliminar: {{$film->title}}</b>
                </div>
                <div class="modal-footer">
                    <form action="/film/{{ $film->FID }}" method="post">
                        @method('delete')
                        {{ csrf_field() }}
                        <button type="button" class="btn btn-sm btn-primary"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
