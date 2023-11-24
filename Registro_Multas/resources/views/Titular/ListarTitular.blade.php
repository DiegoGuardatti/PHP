@extends('Layouts.Template')

@section('title','Todos los titulares')
@section('content')

    <div class="table-responsive">
        <div class="container-fluid">
            <h3 class="text-center mt-11 py-3 mb-0 bg-dark text-white">Listado de Titulares Registrados</h3>
        </div>
        <table class="table table-success table-striped table-bordered">
            
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">AUTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($titular as $titular)
                    <tr>
                        <td  class="align-middle" scope="row">{{ $titular->nombre.' '. $titular->apellido}} </td>
                        <td  class="align-middle" scope="row">
                            @foreach ($titular->autos as $auto)
                                {{ $auto->marca. ' '.$auto->patente }} <br>
                            @endforeach
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('VerTitular', ['titular' => $titular->id]) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('EditarTitular', ['titular' => $titular->id]) }}" class="btn btn-warning">Editar</a>
                            <form method="POST" action="{{ route('EliminarTitular', ['titular' => $titular->id]) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <h1>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection