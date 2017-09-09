@extends("layouts.app")


@section("content")

<div class="container text-center formu">
  <h1>Editar Producto</h1>
<!-- formulario -->

  @include("productos.formulario",['url' => '/editar'.$producto->id, 'method' => 'PATCH'])


</div>




@endsection
