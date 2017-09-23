{!! Form::open(['action' => ['EnCarritoController@store'], 'method' => 'POST']) !!}
  <input type="hidden" name="Products_id" value="$producto->id">
  <input class="btn btn-raised btn-success" type="submit" value="agg al carrito">

{!! Form::close() !!}

<!-- ,'url' => '/en_carritos' -->
