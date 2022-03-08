<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    //---------------------------------- CONSULTA ----------------------------------
    public function users()
    {
        $datos = Users::all();
        return view('lista_users',['datos'=>$datos]);
    }

    //---------------------------- REGISTRO: VISTA -----------------------------
    public function registro_user()
    {
        return view('register/register_user');
    }

    //---------------------------- REGISTRO: STORE -----------------------------
    public function store_user(Request $request)
    {
        //$datos = request()->all();
        $datos = request()->except('_token');

        if($request->hasFile('picuser')){
            $datos['picuser']=$request->file('picuser')->store('local');
        }

        /*$file=$request->file('foto');
        $ldate=date('Ymd_His_');
        $foto=$file->getClientOriginalName();
        $foto2=$ldate."foto".$foto;
        \Storage::disk('foto')->put($foto2,\File::get($file));
        */

        Users::insert($datos);
        return redirect()->route('lista_users');
    }

    //--------------------------- CONSULTA: INFORMACIÓN ---------------------------
    public function informacion_user($id)
    {
        $user = Users::find($id);
        return view('user/informacion_user')
            ->with(['user' => $user]);
    }

    //-------------------------- MODIFICAR: VISTA -----------------------------
    public function editar_user(Users $id){
        $users = Users::all();
        return view('user/modificacion_user')
        ->with(['users' => $id]);
    }

    //-------------------------- MODIFICAR: SALVAR ----------------------------
    public function guardar_user(Users $id, Request $request)
    {
        /*
        $id->update(
            $request->all();
            $request->only('nombre','fn','gen','matricula','direccion','email','pass','foto','id_grupo')
        );
        */

        //---------------------- FOTO/ARCHIVO ------------------------
        if($request->file('picuser') != ''){
            
            $file = $request->file('picuser');
            //$picuser = $file->getClientOriginalName();
            $picuser = $request->file('picuser')->getClientOriginalName();
            $date = date('Ymd_His_');
            $picuser2 = $date . $picuser;
            \Storage::disk('local')->put($picuser2, \File::get($file));
        }
        else{
            $picuser2 = $request->picuser;
        }

        $query = Users::find($id->id);
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
            $query->picuser = $request->picuser2;
        $query->save();

        return redirect()->route('informacion_user',['id' => $id->id]);
    }

    //------------------------ BORRAR -------------------------
    public function borrar(Users $id)
    {
        $id->delete();
        return redirect()->route('lista_drivers');
    }


    //--------------------------- PERFIL USER ---------------------------
    public function perfil_user()
    {
        $datos = Users::all();
        return view('user/index_user',['datos'=>$datos]);
    }
}
