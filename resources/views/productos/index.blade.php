@extends('layouts.app')

@section('content')

  <div class="text-center">
    <h1>Productos</h1>
  </div>

  <div class="container proTable">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Titulo</td>
          <td>Descripcion</td>
          <td>Precio</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($productos as $element)
          <tr>
            <td>{{$element->id}}</td>
            <td>{{$element->title}}</td>
            <td>{{$element->description}}</td>
            <td>{{$element->precio}}</td>
            <td>
              <a href="{{url('productos/editar', $element->id)}}">
                Editar
              </a>
              <a href="{{url('productos/eliminar', $element->id)}}">
                Eliminar
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-right">
      <a class="btn btn-primary btn-fab" href="{{url('productos/create')}}">
        <i class="material-icons">+</i>
      </a>
    </div>

  </div>



@endsection
