@extends("layouts.app")

@section("content")

  <div class="container text-center formu">
    <h1>Eliminar {{ $producto->title }} </h1>
  <!-- formulario -->

  {!! Form::open(['action' => ['ProductsController@destroy', $producto], 'enctype' => 'multipart/form-data', 'method' => 'DELETE']) !!}
          <p>¿Deseas <strong>Eliminar</strong> El producto <strong>{{ $producto->title }}?</strong></p>
          {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}

  </div>

@endsection
