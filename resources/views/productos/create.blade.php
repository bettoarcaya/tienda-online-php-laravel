@extends("layouts.app")


@section("content")

  <div class="container text-center">
    <h1>Nuevo Producto</h1>
    <!-- formulario -->

    {!! Form::open(['url' => '/productos', 'method' => 'POST']) !!}

    <div class="form-group">
      {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Nombre Del Producto'])}}

    </div>

    <div class="form-group">
      {{ Form::number('Pricing','',['class' => 'form-control', 'placeholder' => 'Prcio Del Producto En $'])}}

    </div>

    <div class="form-group">
      {{ Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Descripcion Del Producto'])}}

    </div>

    <div class="form-group text-right">
      <a href="{{url('/productos')}}" class="btn btn-raised btn-danger"> Regresar</a>
      <input type="submit" name="" value="Enviar" class="btn btn-raised btn-success">
    </div>

    {!! Form::close() !!}

  </div>


@endsection
