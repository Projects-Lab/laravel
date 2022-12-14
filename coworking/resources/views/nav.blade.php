<section class="top-bar animated-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="../images/logo-horizontal.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service')}}">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contactenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('inicio') }}">Ingresar</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
