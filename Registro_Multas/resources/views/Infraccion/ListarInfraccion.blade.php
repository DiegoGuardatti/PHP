@extends('Layouts.Template')

@section('title','Listar Infracciones')
@section('content')
    <div class="table-responsive">
        <div class="container-fluid">
            <h3 class="text-center mt-11 py-3 mb-0 bg-dark text-white">Listado de Infracciones</h3>
        </div>
        <table class="table table-success table-striped table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Infraccion</th>
                    <th scope="col">Auto</th>
                    <th scope="col">Patente</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($auto as $auto)
                    @if ($auto->infraccion->isNotEmpty())
                        @foreach ($auto->infraccion as $infraccion)
                            <tr>
                                <td scope="row" class="align-middle">{{ $infraccion->fecha }}</td>
                                <td scope="row"> {{ $infraccion->tipo}}</td>
                                <td scope="row" class="align-middle">{{ $auto->marca }} </td>
                                <td scope="row" class="align-middle">{{ $auto->patente}} </td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection