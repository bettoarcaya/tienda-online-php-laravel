{!! Form::open(['url' => $url, 'method' => $method]) !!}

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
  <input type="submit" name="" value="Enviar" class="btn btn-raised btn-success">
</div>

{!! Form::close() !!}
