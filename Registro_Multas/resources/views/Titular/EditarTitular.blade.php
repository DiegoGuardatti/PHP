@extends('Layouts.Template')

@section('title','Editar Titular')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6" style="background-color: #e5e5e5; padding: 20px; border-radius: 5px;">
            <form method="POST" action="{{ route('ActualizarTitular', $titular->id) }}">
                <label for="Titulo" class="form-label text-dark fs-3 fw-bold">EDITAR TITULAR</label><br><br>
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label text-dark">NONBRE:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $titular->nombre }}">
                    @error('nombre');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label text-dark">APELLIDO:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $titular->apellido }}">
                    @error('apellido');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="dni" class="form-label text-dark">DNI:</label>
                    <input type="text" class="form-control" id="dni" name="dni" value="{{ $titular->dni }}">
                    @error('dni');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="domicilio" class="form-label text-dark">DOMICILIO:</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ $titular->domicilio }}">
                    @error('domicilio');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
