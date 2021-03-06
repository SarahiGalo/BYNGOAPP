<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "tb_users";
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
        'picuser'
    ];
}
