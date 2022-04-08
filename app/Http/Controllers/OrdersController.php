<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drivers;
use App\Users;
use App\Orders;

class OrdersController extends Controller
{
    //--------------------- VISTA: PEDIDO ---------------------
    public function order()
    {
        return view('order/detallespedido');
    }

    //------------------- REGISTRO: PEDIDO --------------------
    public function alta_pedido(Request $request)
    {
        //$datos = request()->all();
        $datos = request()->except('_token');
        Orders::insert($datos);
        $drivers = Drivers::all();
        return view('user/index_user')
            ->with(['drivers' => $drivers]);
    }
}
