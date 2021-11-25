<?php

namespace App\Http\Controllers;

use App\Models\tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiendaController extends Controller
{
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    function index(){
        return view('tiendas');
    }

    public function create(Request $request){
        tienda::create([
            'nombre' => $request->nombre,
            'fecha_apertura' => $request->fecha_apertura
        ]);

        return redirect('/');
    }
   
    public function viewStore($id){
        $tiendas = tienda::all();

        return array('stores'=>$tiendas);
    }

    public function deleteStore($id){
        try {
            $tiendas = tienda::select()->where('id', "=", $id)->delete();
        } catch (\Throwable $th) {
            return array('delete'=>false);
        }
        
       return array('delete'=>true);
    }

    public function editarPelicula(Request $req, $id){
        try {
            $request = $req->all();
            $tiendas = DB::table('tienda')
                ->where('id', $request['id'])
                ->update($request);
            return array('updated'=>true);
        } catch (\Throwable $th) {
            return array('updated'=>false);
        }
    }
}
