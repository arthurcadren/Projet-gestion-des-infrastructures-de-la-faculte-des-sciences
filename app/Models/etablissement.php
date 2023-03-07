<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class etablissement extends Model
{
    use HasFactory;

    public function departement()
    {
        return $this->belongsTo(departement::class);
    }
    public function Salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
