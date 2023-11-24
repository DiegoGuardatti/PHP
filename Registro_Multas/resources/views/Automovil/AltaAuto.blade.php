@extends('Layouts.Template')

@section('title', 'Alta Automovil')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6" style="background-color: #e5e5e5; padding: 20px; border-radius: 5px;">
                <form method="POST" action="{{ route('StoreAuto')}}">
                    <label for="Titulo" class="form-label text-dark fs-3 fw-bold">ALTA AUTOMOVIL</label><br>
                    @csrf
                    <div class="mb-3">
                        <label for="titular_id" class="form-label text-dark">Titular:</label>
                        <select class="form-select" id="titular_id" name="titular_id">
                            @foreach($titular as $tit)
                                <option value="{{ $tit->id }}">{{ $tit->nombre.' '.$tit->apellido }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="marca" class="form-label text-dark">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca">
                        @error('marca');
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label text-dark">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                        @error('modelo');
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="patente" class="form-label text-dark">Patente:</label>
                        <input type="text" class="form-control" id="patente" name="patente">
                        @error('patente');
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label text-dark">Tipo:</label>
                        <select class="form-select" id="tipo" name="tipo">
                            @foreach($tipoAuto as $tipo)
                                <option value="{{ $tipo }}">{{ $tipo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Dar Alta</button>
                    <div class="text-start mt-3">
                        <a href="{{ route('ListarAuto')}}" class="btn btn-secondary">Volver
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
