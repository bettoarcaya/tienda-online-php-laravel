@extends("layouts.app")


@section("content")

  <div class="container text-center formu">
    <h1>Nuevo Producto</h1>
    <!-- formulario -->

    @include("productos.formulario",['producto' => $producto, 'url' => '/productos', 'method' => 'POST'])


  </div>


@endsection
