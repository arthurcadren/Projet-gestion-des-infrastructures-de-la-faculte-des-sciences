<?php

namespace App\Models;

use App\Models\TimeTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;

    public function time_tables()
    {
        return $this->hasMany(TimeTable::class);
    }
    
    public function administrateurs()
    {
        return $this->hasMany(administrateur::class);
    }
}
