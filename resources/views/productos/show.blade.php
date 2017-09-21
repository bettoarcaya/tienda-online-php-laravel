@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body alert alert-info">
            <div class="row  texto">
              <div class="col-xs-6 col-sm-4">
                <img class="img-circle imge" src="">
                <p class="text-center precio ">{{$producto->precio}}$</p>
              </div>
              <div class="text-center col-xs-2 col-sm-8">
                <h1>{{$producto->title}}</h1>
                <p>{{$producto->description}}</p>
              </div>
            </div>
            <div class="col-md-6">
              <a class="btn btn-raised btn-danger center-block" href="{{url('/')}}">regresar</a>
            </div>
            <div class="col-md-6">
              @include('productos.formCarrito',["producto" => $producto])
              <!--<a class="btn btn-raised btn-success center-block" href="">agg al carrito</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
