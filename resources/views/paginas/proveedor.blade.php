@extends('template')
@section('contenido')

<h1 class="text-center text-primary">Stock</h1>
<a href="{{ url('/formularioProveedor') }}" class="btn btn-dark mb-4">Registrar Proveedor</a>

<div class="row">
    @foreach($proveedores as $proveedor)
    <div class="col-md-3 mb-3">
        <div class="card">
            <img src="{{ url('/') }}/img/{{ $proveedor->imagen }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $proveedor->name }}</h5>
                <p class="card-text"><strong>Email </strong>{{ $proveedor->email }}</p>
                <p class="card-text"><strong>Teléfono</strong> {{ $proveedor->telefono }}</p>
                <p class="card-text"><strong>Productos:</strong></p>
                <ul>
                    @foreach($proveedor->productos as $producto)
                    <li>{{ $producto->productName }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('editarProveedores', $proveedor->id) }}" method="post">

                    @method('GET')
                    @csrf
                    <button class="btn btn-primary">Editar</button>
                </form>
                
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
