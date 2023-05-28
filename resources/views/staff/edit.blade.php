@extends('layouts.main')
@extends('partials.css')
@extends('partials.svg')
@extends('partials.dropdown')
@extends('partials.scripts')
@extends('partials.nav')
@extends('partials.sidebar')
@section('title', 'Informacion de Personal')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Informacion de Personal</h1>
        </div>
        <div class="container">
            <br>
            <hr>
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <form action="/staff" method="POST">
                        @method('put')
                        {{ csrf_field() }}
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="staff_id" class="form-control" placeholder="Nombre" type="text" value="{{$staff->staff_id}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="first_name" class="form-control" placeholder="Nombre" type="text" value="{{$staff->first_name}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="last_name" class="form-control" placeholder="Apellidos" type="text" value="{{$staff->last_name}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group" style="display:none;">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <input name="address_id" class="form-control" placeholder="Direccin" type="text" value="1">
                        </div><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Correo" type="text" value="{{$staff->email}}">
                        </div> <br><!-- form-group end.// -->
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-shopping-cart"></i> </span>
                            </div>
                            <input name="store_id" class="form-control" placeholder="Tienda" type="text" value="1">
                        </div> <!-- form-group end.// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-check-circle"></i> </span>
                            </div>
                            <?php
                            $activo = '';
                            if ($staff->active == 1) {
                                $activo = 'Activo';
                            } else {
                                $activo = 'No Activo';
                            }
                            ?>
                            <select name="active" class="custom-select" style="max-width: 120px;">
                                <option value="0">{{ $activo }}</option>
                            </select>
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user-plus"></i> </span>
                            </div>
                            <input name="username" class="form-control" placeholder="Usuario" type="text" value="{{$staff->username}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                            </div>
                            <input name="password" class="form-control" placeholder="Clave" type="password" value="{{$staff->password}}">
                        </div> <!-- form-group// -->
                        <br>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="submit" class="btn btn-sm btn-outline-success">Guardar</button>
                                <a href="/staff" class="btn btn-sm btn-outline-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </article>
            </div> <!-- card.// -->
        </div>
        <!--container end.//-->
    </main>
@endsection
