@extends('template')


@section('contenido')
    <h1 class="text-center">Registrar Producto</h1>

    <form action="{{ route('registrarproducto') }}" method="post" enctype="multipart/form-data">


       @csrf 
        <label for="">Nombre Producto</label>
        <input type="text" class="form-control" name="productname">

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion">

        <label for="">Precio</label>
        <input type="text" class="form-control" name="precio">

        <label for="">Imagen</label>
        <input type="file" class="form-control" name="imagen"> 

        <label for="">Proveedor</label>
        <select name="proveedor" class="form-control">
            @foreach($proveedor as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

        </select>
    </span>
    <input type="number" class="form-control input-sm" id="stock" value="0">
    <span class="input-group-btn">
      <button type="button" class="btn btn-success btn-sm" id="increment">+</button>
    </span>
    
      <select class="form-select" aria-label="Default select example">
          <option selected>Estado</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <input type="submit" class="btn btn-success my-4" value="Registrar">
    </form>


    @endsection