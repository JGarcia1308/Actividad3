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
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    {{-- <button type="button" class="btn btn-sm btn-outline-success">Guardar</button> --}}
                    <a href="/customer" class="btn btn-sm btn-outline-info">Vovler</a>
                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <hr>
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <form>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Nombre" type="text" value="{{$customer->name}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="address" type="text" value="{{$customer->address}}">
                        </div> <br><!-- form-group// -->
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
                            <input name="" class="form-control" placeholder="Telefono" type="text" value="{{$customer->phone}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Ciudad" type="text" value="{{$customer->city}}">
                            {{-- <select class="form-control">
                                <option selected=""> Select job type</option>
                                <option>Designer</option>
                                <option>Manager</option>
                                <option>Accaunting</option>
                            </select> --}}
                        </div> <br><!-- form-group end.// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-globe"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Create password" type="text" value="{{$customer->country}}">
                        </div> <br><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-info"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Repeat password" type="text" value="{{$customer->notes}}">
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div> <!-- card.// -->

        </div>
        <!--container end.//-->

    </main>
@endsection
