<?php

namespace App\Models;


use App\Models\personnel;
use App\Models\TimeTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class administrateur extends Model
{
    use HasFactory;

    public function time_tables()
    {
        return $this->hasMany(TimeTable::class);
    }
    public function personnels()
    {
        return $this->hasMany(personnel::class);
    }

    public function Enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }
}
