<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "tb_orders";
    //protected $primarykey = "id";
    protected $fillable = [
        'nomp', 
        'nump', 
        'destino',
        'proveedor',
        'id_rep',
        'destinatario',
    ];
}
