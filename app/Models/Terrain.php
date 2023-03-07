<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $fillable=['id','type','dimension','emplacement','phototerrain'];
    use HasFactory;
}
