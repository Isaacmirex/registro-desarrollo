@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Reserva de laboratorios') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('eventos.store') }}">
              @csrf
              <div class="row mb-3">
                <label for="nombre"
                  class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                  <input id="nombre" type="text"
                    class="form-control @error('nombre') is-invalid @enderror"
                    name="nombre" value="{{ old('nombre') }}"
                    autocomplete="nombre" autofocus>

                  @error('nombre')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="usuarios"
                  class="col-md-4 col-form-label text-md-end">{{ __('Listo de usuarios') }}</label>

                <div class="col-md-6">
                  {{-- Agregar usuario --}}
                  <select class="form-select" aria-label="Default select example"
                    name='usuario_id'>
                    <option selected>Elija un usuario</option>
                    @foreach ($usuarios as $usuario)
                      <option value="{{ $usuario->id }}">
                        {{ $usuario->nombres }}</option>
                    @endforeach
                  </select>

                  @error('usuarios')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="laboratorios"
                  class="col-md-4 col-form-label text-md-end">{{ __('Listo de laboratorios') }}</label>

                <div class="col-md-6">
                  {{-- Agregar lab --}}
                  <select class="form-select" aria-label="Default select example"
                    name='laboratorio_id'>
                    <option selected>Elija un laboratorio</option>
                    @foreach ($laboratorios as $lab)
                      <option value="{{ $lab->id }}">
                        {{ $lab->nombre }}</option>
                    @endforeach
                  </select>

                  @error('laboratorios')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>


              <div class="row mb-3">
                <label for="detalle"
                  class="col-md-4 col-form-label text-md-end">{{ __('Detalle') }}</label>

                <div class="col-md-6">
                  <textarea id="detalle" name="detalle" rows="5" cols="46"></textarea>

                  @error('detalle')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="asistentes"
                  class="col-md-4 col-form-label text-md-end">{{ __('Asistentes') }}</label>

                <div class="col-md-6">
                  <input id="asistentes" type="tel"
                    class="form-control @error('asistentes') is-invalid @enderror"
                    name="asistentes" value="{{ old('asistentes') }}"
                    autocomplete="asistentes">

                  @error('asistentes')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="fecha"
                  class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>

                <div class="col-md-6">
                  <input id="fecha" type="date"
                    class="form-control @error('fecha') is-invalid @enderror"
                    name="fecha" autocomplete="new-fecha">

                  @error('fecha')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="hora_inicio"
                  class="col-md-4 col-form-label text-md-end">{{ __('Hora Inicio') }}</label>

                <div class="col-md-6">
                  <input id="hora_inicio" type="time" class="form-control"
                    name="hora_inicio" autocomplete="new-password">
                </div>
              </div>

              <div class="row mb-3">
                <label for="hora_fin"
                  class="col-md-4 col-form-label text-md-end">{{ __('Hora Fin') }}</label>

                <div class="col-md-6">
                  <input id="hora_fin" type="time" class="form-control"
                    name="hora_fin" autocomplete="new-password">
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Guardar laboratorio') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
