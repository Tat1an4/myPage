@extends('layout/index')

@section("title",'Landing Page')

@section('content')
    <div class="container w-90">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $mensaje }}
                </div>
                @endif
            </div>
        </div>
        <div class="card-info text-center" style="margin-top: 40px;">
            <em class="register" ><b>Registro</b></em>
            <p class="register card-text" style="font-size: 25px;">
            Completa los datos que se encuentran a continuacion y empieza a participar en nuestro gran sorteo. 
            <br> Todos los campos son obligatorios.
            </p>
            <p class="register card-text" style="font-size: 25px; margin-bottom: 40px;">
                Mucha suerte
            </p>
        </div>
        <hr style="margin-bottom: 60px; width: 30%">
        <form class="row" style="width: 80%; margin: auto;" action="{{ route('createNewUser') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="name" required />
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="inputLastName" name="last_name" required />
            </div>
            <div class="col-md-6">
                <label for="inputDocument" class="form-label">Documento</label>
                <input type="number" class="form-control" id="inputDocument" name="document" required />
            </div>
            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="inputPhone" name="phone" required />
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" required />
            </div>
            <div class="col-md-6">
                <label for="inputDepartment" class="form-label">Departamento</label>
                <select class="form-select form-select-sm" id="department" aria-label="Small select example" name="department">
                    <option value="0" selected>Seleccione</option>
                    @foreach ($departments as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Ciudad</label>
                <select class="form-select form-select-sm" id="city" aria-label="Small select example" name="city">
                    <option value="0" selected>Seleccione</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <div class="form-check" style="padding: 27px;">
                    <input class="form-check-input" type="checkbox" id="gridCheck" value="1" name="check" required>
                    <label class="form-check-label" for="gridCheck">
                    Autorizo el tratamiento de mis datos de acuerdo con la
                    finalidad establecida en la política de protección de datos personales 
                    <a href=""> Ver politica</a>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-md-6" style="text-align: right">
                    <a href="{{ route('home') }}" type="button" class="btn btn-secondary pull-right w-50">Cancelar</a>
                </div>
                <div class="col-md-6" style="text-align: left">
                    <button type="submit" class="btn btn-danger pull-right w-50">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection