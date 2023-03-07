<?php

namespace App\Models;

use App\Models\vehicule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reserVehicule extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $guarded=['id_user','numplaque','debutreserv','finreserv'];
    public function vehicule()
    {
        return $this->hashMany(vehicule::class);
    }
}
