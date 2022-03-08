<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    use HasFactory;

    protected $table = "tb_drivers";
    //protected $primarykey = "id";
    protected $fillable = [
        'nombre', 
        'app', 
        'apm',
        'calle',
        'colonia',
        'municipio',
        'numc',
        'del',
        'tel',
        'email',
        'email2',
        'pass1',
        'pass2',
        'curp',
        'licencia',
        'piclicen',
        'transporte',
        'picrep'
    ];
}
