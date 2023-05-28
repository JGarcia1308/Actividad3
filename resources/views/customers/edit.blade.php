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
            <h1 class="h2">Informacion de Cliente</h1>
        </div>
        <div class="container">
            <br>
            <hr>
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <form action="/customer" method="POST">
                        @method('put')
                        {{ csrf_field() }}
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-shopping-cart"></i> </span>
                            </div>
                            <select name="store" class="custom-select" style="max-width: 120px;">
                                <option value="{{ $customer->store_id }}">{{ $customer->store_id }}</option>
                            </select>
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="customer_id" class="form-control" placeholder="Nombre" type="text"
                                value="{{ $customer->customer_id }}">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="first_name" class="form-control" placeholder="Nombre" type="text"
                                value="{{ $customer->first_name }}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                            </div>
                            <input name="last_name" class="form-control" placeholder="Apellido" type="text"
                                value="{{ $customer->last_name }}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Correo" type="text"
                                value="{{ $customer->email }}">
                        </div> <br>
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <select class="custom-select" style="max-width: 120px;">
                                <option selected="">+971</option>
                                <option value="1">+972</option>
                                <option value="2">+198</option>
                                <option value="3">+701</option>
                            </select>
                            <input name="phone" class="form-control" placeholder="Telefono" type="text"
                                value="{{ $customer->phone }}">
                        </div><!-- form-group// -->
                        <div class="form-group input-group" style="display:none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <input name="address_id" class="form-control" placeholder="Ciudad" type="text"
                                value="1">
                        </div><!-- form-group end.// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-globe"></i> </span>
                            </div>
                            <?php
                            $activo = '';
                            if ($customer->active == 1) {
                                $activo = 'Activo';
                            } else {
                                $activo = 'No Activo';
                            }
                            ?>

                            <select name="active" class="custom-select" style="max-width: 120px;">
                                <option value="0">{{ $activo }}</option>
                            </select>
                        </div> <br><!-- form-group// -->
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="submit" class="btn btn-sm btn-outline-success">Guardar</button>
                                <a href="/customer" class="btn btn-sm btn-outline-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </article>
            </div> <!-- card.// -->
        </div>
        <!--container end.//-->
    </main>
@endsection
