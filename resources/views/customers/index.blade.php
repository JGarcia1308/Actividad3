@extends('layouts.main')
@extends('partials.css')
@extends('partials.svg')
@extends('partials.dropdown')
@extends('partials.scripts')
@extends('partials.nav')
@extends('partials.sidebar')
@section('title', 'Listado de Clientes')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Clientes</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/customer/create" class="btn btn-sm btn-outline-success">Nuevo</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Notas</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->ID }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->notes }}</td>
                            <td>
                                <div>
                                    <a href="/customer/{{ $customer->ID }}" class="btn btn-sm btn-outline-info">Ver</a>
                                    <a href="/customer/{{ $customer->ID }}/edit"
                                        class="btn btn-sm btn-outline-warning">Editar</a>
                                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $customer->ID }}"
                                        class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($customers->links()->paginator->hasPages())
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">{{ $customers->links() }}</div>
            <div class="col-6 col-md-4"></div>
        </div>
        @endif
    </main>
@endsection

@foreach ($customers as $customer)
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop-{{ $customer->ID }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-danger">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Cliente - {{ $customer->ID }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <b>Cliente a Eliminar: {{ $customer->name }}</b>
                </div>
                <div class="modal-footer">
                    <form action="/customer/{{ $customer->ID }}" method="post">
                        @method('delete')
                        {{ csrf_field() }}
                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
