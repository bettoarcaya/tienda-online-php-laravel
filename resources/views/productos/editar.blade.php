@extends("layouts.app")

@section("content")

  <div class="container text-center formu">
    <h1>Editar Producto</h1>
  <!-- formulario -->

    {!! Form::open(['action' => ['ProductsController@update', $producto], 'enctype' => 'multipart/form-data' ,'method' => 'PUT','class' => 'form-horizontal']) !!}

    <div class="form-group">
      {{ Form::text('title',$producto->title,['class' => 'form-control', 'placeholder' => 'Nombre Del Producto'])}}

    </div>

    <div class="form-group">
      {{ Form::number('pricing',$producto->precio,['class' => 'form-control', 'placeholder' => 'Prcio Del Producto En $'])}}

    </div>

    <div class="form-group">
      {{ Form::textarea('description',$producto->description,['class' => 'form-control', 'placeholder' => 'Descripcion Del Producto'])}}

    </div>

    <div class="form-group text-right">
      <a href="{{url('/productos')}}" class="btn btn-raised btn-danger"> Regresar</a>
      <input type="submit" name="Actualizar" value="Enviar" class="btn btn-raised btn-success">
    </div>


    {!! Form::close() !!}

  </div>

@endsection
