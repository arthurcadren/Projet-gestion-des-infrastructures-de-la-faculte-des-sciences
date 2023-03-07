<?php

namespace App\Models;

use App\Models\Salle;
use App\Models\etudiant;
use App\Models\Enseignant;
use App\Models\administrateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimeTable extends Model
{
    use HasFactory;
    public $timestamps=false;
    //protected $guarded=['Data','nomSalle','evenement','nomevent','filiere','niveau','tempsdebut','tempsfin'];
    protected $guarded=['Data','nomSalle','evenement','nomevent','filiere','niveau','tempsdebut','tempsfin'];
    public function Salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function administrateur()
    {
        return $this->belongsTo(administrateur::class);
    }
    public function etudiant()
    {
        return $this->belongsTo(etudiant::class);
    }
    public function Enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }
}
