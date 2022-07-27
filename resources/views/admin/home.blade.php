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
                  <th scope="col">#</th>
                  <th scope="col">Pizza Name</th>
                  <th scope="col">Pizza Description</th>
                  {{-- <th scope="col">State</th> --}}
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                {{-- @foreach ($pizzas as $pizza)
                  <tr>
                    <th scope="row">{{ $pizza['piz_id'] }}</th>
                    <td>{{ $pizza['piz_name'] }}</td>
                    <td>{{ $pizza['piz_description'] }}</td>
                    <td class="d-flex">
                      <a href="{{ route('pizzas.edit', $pizza['piz_id']) }}"
                        class="btn btn-success">Edit Pizza</a>
                      <a href="{{ route('pizzas.ingredients.edit', $pizza['piz_id']) }}"
                        class="btn btn-warning mx-1">Add ingredient</a>
                      <form
                        action="{{ route('pizzas.destroy', $pizza['piz_id']) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
