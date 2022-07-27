@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register.store') }}">
              @csrf

              <div class="row mb-3">
                <label for="nombres"
                  class="col-md-4 col-form-label text-md-end">{{ __('Nombres') }}</label>

                <div class="col-md-6">
                  <input id="nombres" type="text"
                    class="form-control @error('nombres') is-invalid @enderror"
                    name="nombres" value="{{ old('nombres') }}"
                    autocomplete="nombres" autofocus>

                  @error('nombres')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="apellidos"
                  class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                <div class="col-md-6">
                  <input id="apellidos" type="text"
                    class="form-control @error('apellidos') is-invalid @enderror"
                    name="apellidos" value="{{ old('apellidos') }}"
                    autocomplete="apellidos" autofocus>

                  @error('apellidos')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="correo"
                  class="col-md-4 col-form-label text-md-end">{{ __('Dirección de correo') }}</label>

                <div class="col-md-6">
                  <input id="correo" type="correo"
                    class="form-control @error('correo') is-invalid @enderror"
                    name="correo" value="{{ old('correo') }}"
                    autocomplete="correo">

                  @error('correo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="password"
                  class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="password-confirm"
                  class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password"
                    class="form-control" name="password_confirmation"
                    autocomplete="new-password">
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
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
