@extends('layouts.app')

@section('title','Tienda de Productos')

@section('content')

  <div class="text-center">
    <h1>Welcome!</h1>
    <hr>
  </div>
<div class="container">
  <div class="row">
    @foreach ($productos as $element)
      <div class="text-center col-xs-6 col-sm-4">
        <a href="#">
          <img class="img-circle imge" src="">
          <h3><strong>{{$element->title}}</strong></h3>
          <p>{{$element->description}}</p>
          <p>{{$element->precio}}$</p>
        </a>
      </div>
    @endforeach
  </div>

</div>

@endsection
