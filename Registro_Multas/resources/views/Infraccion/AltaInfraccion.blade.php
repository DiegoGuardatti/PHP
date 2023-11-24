@extends('Layouts.Template')

@section('title', 'Alta Infracciones')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6" style="background-color: #e5e5e5; padding: 20px; border-radius: 5px;">
                <form method="POST" action="{{ route('StoreInfraccion')}}">
                    <label for="Titulo" class="form-label text-dark fs-3 fw-bold">ALTA INFRACCIONES</label><br><br>
                    @csrf
                    <div class="mb-3">
                        <label for="auto_id" class="form-label text-dark">Auto/Patente:</label>
                        <select class="form-select" id="auto_id" name="auto_id">
                            @foreach($auto as $car)
                                <option value="{{ $car->id }}">{{ $car->marca.' '. $car->patente }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label text-dark">Fecha:</label>
                        <input type="text" class="form-control" id="fecha" name="fecha">
                        @error('fecha');
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label text-dark">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                        @error('descripcion');
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tipoInfraccion" class="form-label text-dark">Tipo de Infracción:</label>
                        <select class="form-select" id="tipoInfraccion" name="tipoInfraccion">
                            @foreach($tipoInfraccion as $tipo)
                                <option value="{{ $tipo }}">{{ $tipo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Dar Alta</button>
                    <div class="text-start mt-3">
                        <a href="{{ route('ListarInfraccion')}}" class="btn btn-secondary">Volver
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
