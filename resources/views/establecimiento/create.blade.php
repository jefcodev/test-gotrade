@extends('layouts.app')

@section('title','Establecimiento')
@section('content')
<div class="container">
    <h1>Lista de Establecimientos</h1>
    <p>Establecimiento</p>

    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif



    <form action="{{ route('establecimiento.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="direccion_manzana" class="form-label">Dirección Manzana</label>
                    <input type="text" class="form-control" name="direccion_manzana">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="direccion_calle_principal" class="form-label">Dirección Calle Principal</label>
                    <input type="text" class="form-control" name="direccion_calle_principal">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="direccion_numero" class="form-label">Dirección Número</label>
                    <input type="text" class="form-control" name="direccion_numero">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="direccion_transversal" class="form-label">Dirección Transversal</label>
                    <input type="text" class="form-control" name="direccion_transversal">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="direccion_referencia" class="form-label">Dirección Referencia</label>
                    <input type="text" class="form-control" name="direccion_referencia">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="administrador" class="form-label">Administrador</label>
                    <input type="text" class="form-control" name="administrador">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefonos_contacto" class="form-label">Teléfonos de Contacto</label>
                    <input type="text" class="form-control" name="telefonos_contacto">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email_contacto" class="form-label">Email de Contacto</label>
                    <input type="email" class="form-control" name="email_contacto">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" name="ubicacion">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>

    </form>

    @if(Session::has('mensaje'))
    <script>
        Swal.fire({
            title: "Mensaje",
            text: "{{ Session::get('mensaje') }}",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
@endif

    @endsection