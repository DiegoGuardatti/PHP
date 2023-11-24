<header>
    
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Titular
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('ListarTitular') }}">Vista de Titulares</a></li>
                    <li><a class="dropdown-item" href="{{ route('AltaTitular') }}">Alta de Titular</a></li>
                    
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Automovil
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('ListarAuto') }}">Vista de Automovil</a></li>
                    <li><a class="dropdown-item" href="{{ route('AltaAuto') }}">Alta de Automovil</a></li>
                    
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Infracciones
                    </a>
                    <ul class="dropdown-menu">
                        
                        <li><a class="dropdown-item" href="{{ route('ListarInfraccion')}}">Vista de Infracciones</a></li>
                        <li><a class="dropdown-item" href="{{ route('AltaInfraccion') }}">Alta de Infracciones</a></li>
                        
                    </ul>
                    </li>
            </ul>
            </div>
        </div>
        </nav>

</header>