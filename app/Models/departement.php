<?php

namespace App\Models;

use App\Models\Salle;
use App\Models\etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class departement extends Model
{
    use HasFactory;
    public function etablissements()
    {
        return $this->hashMany(etablissement::class);
    }
    public function Salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
