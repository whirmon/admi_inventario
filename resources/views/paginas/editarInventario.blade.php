@extends('template')

@section('contenido')
    <h1 class="text-center">Editar Producto</h1>

    <form action="" method="post" enctype="multipart/form-data">
       
       @csrf 
        <label for="">Nombre Producto</label>
        <input type="text" class="form-control" name="productname" value="{{ $inventario->productName }}">

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{ $inventario->description }}">

        <label for="">Precio</label>
        <input type="text" class="form-control" name="precio" value="{{ $inventario->cost_price }}">

        <label for="">Imagen</label>
        <input type="file" class="form-control" name="imagen"> 

        <label for="">Proveedor</label>
        <select name="proveedor" class="form-control">
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}" {{ $inventario->id_proveedores == $proveedor->id ? 'selected' : '' }}>
                    {{ $proveedor->name }}
                </option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-success my-4" value="Actualizar">
    </form>
@endsection
