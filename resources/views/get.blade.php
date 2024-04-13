@extends('layout/index')

@section("title",'Landing Page')

@section('content')
    <div class="container w-90 text-center">
        <div class="card-info" style="margin-top: 40px;">
            <em class="register" ><b>Participantes</b></em>
        </div>
        <hr style="margin-bottom: 60px; width: 30%">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row"> {{ $item->id }} </th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->city_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="card-info" style="margin-top: 20px;">
                <a type="button" class="btn btn-outline-success" style="height: 39px; width: 16%;" href="{{ route('user.export') }}">
                <i class="fa-solid fa-file-excel" style="font-size: 20px;"></i>  Descargar excel</a>
            </div>
        </div>
    </div>
@endsection