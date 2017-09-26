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
        @foreach ($productos as $element)
          <tr>
            <td>{{$element->title}}</td>
            <td>{{$element->description}}</td>
            <td>{{$element->precio}}</td>
          </tr>
        @endforeach

        <tr>
          <td>total</td>
          <td>{{$total}}</td>
        </tr>

      </tbody>
    </table>

  </div>


@endsection
