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
                        {{ csrf_field() }}
                        <div class="form-group input-group" style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-shopping-cart"></i> </span>
                            </div>
                            <select name="store" class="custom-select" style="max-width: 120px;">
                                <?php foreach ($stores as $store) :  ?>
                                <option value={{ $store->store_id }}>{{ $store->store_id }}</option>
                                <?php endforeach; ?>
                            </select>
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="first_name" class="form-control" placeholder="Nombre" type="text">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                            </div>
                            <input name="last_name" class="form-control" placeholder="Apellido" type="text">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Correo" type="text">
                        </div> <br>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <select class="custom-select" style="max-width: 120px;">
                                <option selected="">+971</option>
                                <option value="1">+972</option>
                                <option value="2">+198</option>
                                <option value="3">+701</option>
                            </select>
                            <input name="phone" class="form-control" placeholder="Telefono" type="text">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group" style="display:none">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <input name="address_id" class="form-control" placeholder="Ciudad" type="text" value="1">
                        </div><!-- form-group end.// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-globe"></i> </span>
                            </div>
                            <select name="active" class="custom-select" style="max-width: 120px;">
                                <option value = "1" selected>Activo</option>
                                <option value = "0">No Activo</option>
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
