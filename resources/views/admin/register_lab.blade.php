@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Registro de laboratorios') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('laboratorios.store') }}">
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
                <label for="ubicacion"
                  class="col-md-4 col-form-label text-md-end">{{ __('Ubicacion') }}</label>

                <div class="col-md-6">
                  <input id="ubicacion" type="text"
                    class="form-control @error('ubicacion') is-invalid @enderror"
                    name="ubicacion" value="{{ old('ubicacion') }}"
                    autocomplete="ubicacion" autofocus>

                  @error('ubicacion')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="personal"
                  class="col-md-4 col-form-label text-md-end">{{ __('Personal') }}</label>

                <div class="col-md-6">
                  <input id="personal" type="text"
                    class="form-control @error('personal') is-invalid @enderror"
                    name="personal_cargo" value="{{ old('personal') }}"
                    autocomplete="personal">

                  @error('personal')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="descripcion"
                  class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                <div class="col-md-6">
                  <input id="descripcion" type="text"
                    class="form-control @error('descripcion') is-invalid @enderror"
                    name="descripcion" autocomplete="new-descripcion">

                  @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="aforo"
                  class="col-md-4 col-form-label text-md-end">{{ __('Aforo') }}</label>

                <div class="col-md-6">
                  <input id="aforo" type="tel" class="form-control"
                    name="aforo" autocomplete="new-password">
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
