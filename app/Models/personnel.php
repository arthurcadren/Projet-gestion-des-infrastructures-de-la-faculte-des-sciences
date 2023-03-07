<?php

namespace App\Models;

use App\Models\administrateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class personnel extends Model
{
    use HasFactory;
    public function administrateur()
    {
        return $this->belongsTo(administrateur::class);
    }
}
