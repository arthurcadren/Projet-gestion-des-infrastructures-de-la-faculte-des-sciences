<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    //public $timestamps=false;
    protected $guarded=['noms','matricule','email'];
    use HasFactory;
}
