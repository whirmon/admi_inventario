@extends('template')
@section('contenido')

<h1 class="text-center text-primary">Stock</h1>
<a href="{{url('/formularioInventario')}}" class="btn btn-dark mb-4">Registrar Producto</a>

<div class="row">
@foreach($inventario as $item)

<div class="col-md-3 mb-3">

    <div class="card" >
        <img src="{{ url('/') }}/img/{{ $item->imagen }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->productName}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <p class="card-text"><strong>Precio Costo </strong> ${{$item->cost_price}}</p>
            <p class="card-text"><strong>Precio Venta </strong> </p>
            <p class="card-text"><strong>proveedor </strong> {{$item->proveedores}}</p>
            <form action="{{ route('editarInventario', $item->id) }}" method="post">
              @method('GET')
              @csrf
              <button class="btn btn-primary">Editar</button>
          </form>
          
          
             <a href="" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

</div>


@endforeach
</div>
@endsection


