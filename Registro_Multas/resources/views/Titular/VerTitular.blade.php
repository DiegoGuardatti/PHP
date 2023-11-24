@extends('Layouts.Template')

@section('title','Vista Titular')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="bg-dark text-white mb-3">Datos del Titular</h2>
                    <div class="card-header" >
                        <h4 class="card-title">{{ $titular->nombre.' '. $titular->apellido }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>DOMICILIO:</strong> {{ $titular->domicilio }}</p>
                        <p><strong>DNI:</strong> {{ $titular->dni }}</p>
                        <hr>
                        <h5>AUTOMOVILES:</h5>
                        <ul class="list-group">
                            @foreach ($titular->autos as $auto)
                                <li class="list-group-item">{{ $auto->marca.' '.$auto->patente }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
