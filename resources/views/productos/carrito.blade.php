@extends("layouts.app")

@section("content")


  <div class="text-center">
    <h1>Carrito</h1>
  </div>

  <div class="container proTable">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>Producto</td>
          <td>Descripcion</td>
          <td>Precio</td>
        </tr>
      </thead>
      <tbody>

        @foreach ($productos as $elemento)
          <tr>
            <td>{{$elemento->title}}</td>
            <td>{{$elemento->description}}</td>
            <td>{{$elemento->precio}}</td>
          </tr>
        @endforeach

        <tr>
          <td>Total</td>
          <td>{{$total}}.00</td>
        </tr>

      </tbody>
    </table>

  </div>


@endsection
