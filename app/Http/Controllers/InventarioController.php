<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventario;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class InventarioController extends Controller
{
    public function index(){


       $productos = Inventario::join('proveedores', 'lista_inventario.id_proveedores', '=', 'proveedores.id')->select('lista_inventario.*','proveedores.name AS proveedores')->get();
        return view('paginas.inventario', array("inventario" => $productos));
        
    }





    public function getForm(){

        $proveedores=Proveedores::all();
        return view ('paginas.registrarInventarios', array("proveedor"=> $proveedores));
    }









    public function store( Request $request){

        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen'); //imagen1.jpg

            $nombre_imagen = Str::slug($request->post('productname')).".".$imagen->guessExtension();
            
            $ruta = public_path("img/");
            copy($imagen->getRealPath(), $ruta.$nombre_imagen);
        }else{
            $nombre_imagen = null;
        }



        $inventarioss = new Inventario();
        $inventarioss->productName = $request->post('productname');
        $inventarioss->description = $request->post('descripcion');
        $inventarioss->cost_price = $request->post('precio');
        $inventarioss->imagen = $nombre_imagen;
        $inventarioss->id_proveedores = $request->post('proveedor');
        $inventarioss->save();

        return redirect()->route('inventario');
    }

 
//actualizar
public function editar($id){
    $inventario = Inventario::find($id);
    $proveedores = Proveedores::all();

    return view("paginas.editarInventario", compact('inventario', 'proveedores'));
}


}
