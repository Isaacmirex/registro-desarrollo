@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Lista de reservas') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{ __('You are logged in like admin!') }}

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nombres</th>
                  <th scope="col">Evento</th>
                  <th scope="col">Detalle</th>
                  <th scope="col">Asistentes</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Hora inicio - Hora fin</th>
                  <th scope="col">Laboratorio</th>
                  <th scope="col">Ubicación</th>
                  <th scope="col">Personal a cargo</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($eventos as $evento)
                  <tr>
                    <th scope="row">{{ $evento->usuario->nombres }}
                      {{ $evento->usuario->apellidos }}</th>
                    <td>{{ $evento->nombre }}</td>
                    <td>{{ $evento->detalle }}</td>
                    <td>{{ $evento->asistentes }}</td>
                    <td>{{ $evento->fecha }}</td>
                    <td>{{ $evento->hora_inicio }} -
                      {{ $evento->hora_fin }}</td>
                    <td>{{ $evento->laboratorio->nombre }}</td>
                    <td>{{ $evento->laboratorio->ubicacion }}</td>
                    <td>{{ $evento->laboratorio->personal_cargo }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
