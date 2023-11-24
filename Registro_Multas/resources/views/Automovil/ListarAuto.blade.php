@extends('Layouts.Template')

@section('title','Todos los autos')
@section('content')
    <div class="table-responsive">
        <div class="container-fluid">
            <h3 class="text-center mt-11 py-3 mb-0 bg-dark text-white">Listado de Autos Registrados</h3>
        </div>
        <table class="table table-success table-striped table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Auto</th>
                    <th scope="col">Patente</th>
                    <th scope="col">Titular</th> 
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($titular as $titular)
                    @foreach ($titular->autos as $auto)
                    <tr>
                        <td class="align-middle">{{ $auto->marca.' '.$auto->modelo}} <br>{{ $auto->tipo }}</td>
                        <td class="align-middle">{{ $auto->patente }}</td>
                        <td class="align-middle">{{ $titular->nombre.' '. $titular->apellido}}</td>
                    @endforeach
                    </tr>
                @endforeach
            </tbody>   
        </table>
    </div>
    
@endsection