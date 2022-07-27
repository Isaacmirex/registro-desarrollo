@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-capitalize text-center"> Agregar rol a usuarios</h3>
        {{-- Card --}}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title text-capitalize">Eligir el usuario</h5>
          </div>
          <div class="card-body">

            <p class='m-2'>Lista de usuarios</p>
            <form method="POST" action="{{ route('admin.rol.index') }}">
              @csrf
              @method('PUT')

              <select class="form-select" aria-label="Default select example"
                name='id'>
                <option selected>Lista de usuarios</option>
                @foreach ($usuarios as $usuario)
                  <option value="{{ $usuario->id }}">
                    {{ $usuario->nombres }}</option>
                @endforeach
              </select>

              <p class="m-2">Rol</p>
              <input id="rol" type="text"
                class="form-control @error('rol') is-invalid @enderror"
                name="rol" value="{{ old('rol') }}" autocomplete="rol"
                autofocus>
              @error('rol')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <div class="row mt-2">
                <div class="text-end mt-1">
                  <button type="submit" class="btn btn-primary">
                    Asignar rol
                  </button>
                </div>
              </div>

            </form>
            {{-- <p class="m-2">Description: {{ $pizza['piz_description'] }}</p> --}}
          </div>
        </div>
        <table class="table mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombres</th>
              <th scope="col">Correo</th>
              <th scope="col">Rol</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($usuarios as $usuario)
              <tr>
                <th scope="row">{{ $usuario->id }}</th>
                <td>{{ $usuario->nombres }} {{ $usuario->apellidos }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->rol }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
