<?php

namespace App\Models;

use App\Models\TimeTable;
use App\Models\departement;
use App\Models\etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salle extends Model
{
    use HasFactory;
     //public $timestamps=false;
     //protected $fillable=['nomSalle','capacite','emplacement'];

     protected $guarded=['nomSalle','capacite','emplacement'];

     public function time_tables()
     {
         return $this->hasMany(TimeTable::class);
     }

     public function etablissements()
     {
         return $this->hashMany(etablissement::class);
     }
         public function departements()
        {
         return $this->hashMany(departement::class);
      }

    
}
