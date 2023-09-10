@extends('template')


@section('contenido')
    <h1 class="text-center">Registrar Proveedor</h1>

    <form action="{{route('registrarproveedor')}}" method="post" enctype="multipart/form-data">


       @csrf 
        <label for="">Proveedor</label>
        <input type="text" class="form-control" name="name">

        <label for="">Email</label>
        <input type="text" class="form-control" name="email">

        
        <label for="">Telefono</label>
        <input type="text" class="form-control" name="telefono"> 

        <label for="">Imagen</label>
        <input type="file" class="form-control" name="imagen"> 
           
       

       
       

        </select>

        <input type="submit" class="btn btn-success my-4" value="Registrar">
    </form>


    @endsection