@extends('Layouts.Template')

@section('title','Alta Titular')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6" style="background-color: #e5e5e5; padding: 20px; border-radius: 5px;">
            <form method="POST" action="{{ route('StoreTitular')}}"> 
                <label for="Titulo" class="form-label text-dark fs-3 fw-bold">ALTA TITULAR</label><br><br>
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label text-dark">NOMBRE:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    @error('nombre');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label text-dark">APELLIDO:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                    @error('apellido');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="dni" class="form-label text-dark">DNI:</label>
                    <input type="text" class="form-control" id="dni" name="dni">
                    @error('dni');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="domicilio" class="form-label text-dark">DOMICILIO:</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio">
                    @error('domicilio');
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Dar Alta</button>
                <div class="text-start mt-3">
                    <a href="{{ route('ListarTitular')}}" class="btn btn-secondary">Volver
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection