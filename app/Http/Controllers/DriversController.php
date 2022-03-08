<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drivers;

class DriversController extends Controller
{
    //---------------------------------- CONSULTA ----------------------------------
    public function drivers()
    {
        $datos = Drivers::all();
        return view('lista_drivers',['datos'=>$datos]);
    }

    //---------------------------- REGISTRO: VISTA -----------------------------
    public function registro()
    {
        return view('register/register_driver');
    }

    //---------------------------- REGISTRO: STORE -----------------------------
    public function store(Request $request)
    {
        //$datos = request()->all();
        $datos = request()->except('_token');

        if($request->hasFile('piclicen')){
            $datos['piclicen']=$request->file('piclicen')->store('local');
        }

        if($request->hasFile('picrep')){
            $datos['picrep']=$request->file('picrep')->store('local');
        }

        /*$file=$request->file('foto');
        $ldate=date('Ymd_His_');
        $foto=$file->getClientOriginalName();
        $foto2=$ldate."foto".$foto;
        \Storage::disk('foto')->put($foto2,\File::get($file));
        */

        Drivers::insert($datos);
        return redirect()->route('lista_drivers');
    }

    //--------------------------- CONSULTA: INFORMACIÓN ---------------------------
    public function informacion($id)
    {
        $driver = Drivers::find($id);
        return view('driver/informacion_driver')
            ->with(['driver' => $driver]);
    }

    //-------------------------- MODIFICAR: VISTA -----------------------------
    public function editar(Drivers $id){
        $drivers = Drivers::all();
        return view('driver/modificacion_driver')
        ->with(['drivers' => $id]);
    }

    //-------------------------- MODIFICAR: SALVAR ----------------------------
    public function guardar(Drivers $id, Request $request)
    {
        /*
        $id->update(
            $request->all();
            $request->only('nombre','fn','gen','matricula','direccion','email','pass','foto','id_grupo')
        );
        */

        //---------------------- FOTO/ARCHIVO ------------------------
        if($request->file('piclicen') != ''){
            
            $file = $request->file('piclicen');
            //$piclicen = $file->getClientOriginalName();
            $piclicen = $request->file('piclicen')->getClientOriginalName();
            $date = date('Ymd_His_');
            $piclicen2 = $date . $piclicen;
            \Storage::disk('local')->put($piclicen2, \File::get($file));
        }
        else{
            $piclicen2 = $request->piclicen;
        }

        if($request->file('picrep') != ''){
            
            $file = $request->file('picrep');
            //$picrep = $file->getClientOriginalName();
            $picrep = $request->file('picrep')->getClientOriginalName();
            $date = date('Ymd_His_');
            $picrep2 = $date . $picrep;
            \Storage::disk('local')->put($picrep2, \File::get($file));
        }
        else{
            $picrep2 = $request->picrep;
        }

        $query = Drivers::find($id->id);
            $query->nombre = $request->nombre;
            $query->app = $request->app;
            $query->apm = $request->apm;
            $query->calle = $request->calle;
            $query->colonia = $request->colonia;
            $query->municipio = $request->municipio;
            $query->numc = $request->numc;
            $query->del = $request->del;
            $query->tel = $request->tel;
            $query->email = $request->email;
            $query->email2 = $request->email2;
            $query->pass1 = $request->pass1;
            $query->pass2 = $request->pass2;
            $query->curp = $request->curp;
            $query->licencia = $request->licencia;
            $query->piclicen = $request->piclicen2;
            $query->transporte = $request->transporte;
            $query->picrep = $request->picrep2;
        $query->save();

        return redirect()->route('informacion',['id' => $id->id]);
    }

    //------------------------ BORRAR -------------------------
    public function borrar(Drivers $id)
    {
        $id->delete();
        return redirect()->route('lista_drivers');
    }

    //--------------------------- PERFIL DRIVER ---------------------------
    public function perfil()
    {
        $datos = Drivers::all();
        return view('driver/index_driver',['datos'=>$datos]);
    }
}
