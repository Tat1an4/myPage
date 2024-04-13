@extends('layout/index')

@section("title",'Landing Page')

@section('content')
    <div class="container w-90 text-center">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
                @endif
            </div>
        </div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{asset("img/bmw-1.png")}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset("img/bmw-2.png")}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset("img/bmw-3.png")}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset("img/bmw-4.png")}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <div class="card-info" style="margin-top: 20px;">
            <em class="title" style="color:red;"><b>¡¡GRAN SORTEO!!</b></em>
            <p class="title card-text" style="font-size: 25px;">Si ya eres cliente de nuestra marca te invitamos a inscribirte a nuestro gran sorteo, 
                podras ganar espectaculares accesorios para tu automovil. Solo con llenar el formulario empiezas a participar.
            </p>
            <a type="button" class="btn btn-outline-danger" style="height: 45px; width: 20%;" href="{{ route('user.create') }}">Inscribirse</a>
            <hr>
            <em class="title"><b>Participantes:</b></em>
            <br>
            <div id="number">
                <span class="count">{{ $data}}</span>
            </div>
            <div class="row">
                <div class="col-md-4 mx-auto" style="text-align: right;">
                    @if($data >= 5 && $winFlag == 0)
                        <a class="btn btn-primary" type="button" style="margin-top:20px; width: 200px;" href="{{ route('win.get') }}">Empezar sorteo</a>
                    @else
                        <button class="btn btn-primary" type="button" style="margin-top:20px; width: 200px;" disabled>Empezar sorteo</button>
                    @endif
                </div>
                <div class="col-md-4 mx-auto" style="text-align: left;">
                    <a class="btn btn-secondary" type="button" style="margin-top:20px; width: 200px;" href="{{ route('user.get') }}">Ver participantes</a>
                </div>
            </div>
        </div>
        @if ($winFlag == 1)
            <div class="row w-100" style="margin-top: 50px;">
                <div class="card-win w-50" style="margin: auto;">
                    <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="color:blue; margin-top:20px;">GANADOR DEL SORTEO</h2>
                        <p class="card-text">El ganador de nuestro especial sorteo es:</p>
                        @foreach ($win as $item)
                        <p><b>Nombre:</b> {{ $item->name}} {{ $item->last_name}}</p>
                        <p><b>Telefono:</b> {{ $item->phone }}</p>
                        <p><b>Ciudad:</b> {{ $item->city }}</p>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="card-info" style="margin-top: 20px;">
                <em class="benefit"><b>¿Por qué participar?</b></em>
                <p class="title card-text" style="font-size: 25px;">
                    Te recontamos un poco sobre nuetros beneficios y fortalezas, para que te animas a participar del sorteo y disfrutes las muchas ventajas de ser parte de BMW.
                </p>
            </div>
        </div>
        <div class="row w-100" style="margin-top: 50px;">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Diseños unicos</h5>
                    <img src="{{asset("img/bmw3.0.webp")}}" class="d-block w-100" alt="...">
                    <p class="card-text info-card">Nuestros autos BMW son sinónimo de elegancia y rendimiento, fusionamos el diseño unico e innovador con tecnología de vanguardia. Desde la distintiva parrilla doble hasta las líneas aerodinámicas, 
                        cada uno de los detalles refleja una estética de lujo y deportividad.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tiempos de carga</h5>
                    <img src="{{asset("img/bmw-ix1.jpeg")}}" class="d-block w-100" alt="..." style="height: 207px;">
                    <p class="card-text info-card">En cuanto a su tiempo de carga, si nos referimos a los modelos eléctricos, hemos implementado sistemas de carga rápida, reduciendo significativamente el tiempo necesario para recargar 
                        las baterías y permitiendo una mayor autonomía en menos tiempo.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Leasing y financiamiento</h5>
                    <img src="{{asset("img/bmw2023.webp")}}" class="d-block w-100" alt="..." >
                    <p class="card-text info-card">El financiamiento puede adaptarse a diversas necesidades y presupuestos, con opciones desde planes de leasing hasta financiamiento tradicional. 
                        Con programas especiales y tasas competitivas, aseguramos que la experiencia de conducción esté al alcance de quien busca calidad y prestigio.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection