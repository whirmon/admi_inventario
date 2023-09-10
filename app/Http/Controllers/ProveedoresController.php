<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventario;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProveedoresController extends Controller
{
    //retorna la viste de los proveedores proveedor.blade.php
    public function index2()
    {
        $proveedores = Proveedores::with('productos')->get();
        return view('paginas.proveedor', compact('proveedores'));
    }
    
  
 
public function getForm2(){

    $inventario=Inventario::all();
    return view('paginas.resgistrarProveedor', array("verInventario"=>$inventario));
}

public function store2(Request $request){

    if($request->hasFile('imagen')){
        $imagen = $request->file('imagen'); //imagen1.jpg

        $nombre_imagen = Str::slug($request->post('name')).".".$imagen->guessExtension();
        
        $ruta = public_path("img/");
        copy($imagen->getRealPath(), $ruta.$nombre_imagen);
    }else{
        $nombre_imagen = null;
    }

    $proveedoress = new Proveedores();
        $proveedoress->name = $request->post('name');
        $proveedoress->email = $request->post('email');
        $proveedoress->telefono = $request->post('telefono');
        $proveedoress->imagen = $nombre_imagen;
       
        $proveedoress->save();

        return redirect()->route('proveedor1');
    }


    public function editar2($id){
        $proveedores = Proveedores::find($id);
    
    
        $inventario= Inventario::all();
        return view("paginas.editarProveedores", array("proveedores"=> $proveedores,"inventario"=>$inventario));
    
    
    }
}


