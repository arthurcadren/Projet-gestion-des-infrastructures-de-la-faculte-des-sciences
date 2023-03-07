<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    use HasFactory;
    protected $fillable=[''];
    //public $timestamps=false;
    //protected $guarded=['marque','modele','annee','couleur','numero_plaque','photo'];
    //protected $fillable=['marque','modele','annee','couleur','numero_plaque','photo'];

    public function reserVehicule()
    {
        return belongTo(reserVehicule::class);
    }

    /*public static function autoIncrement()
    {
        return static::max('id_vehicule')+1;
    }
    public $incrementig=false;
    protected static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $model->id_vehicule=$model->getKey();
            $model->{$model->getKeyName()}=$model->autoIncrement();
        });
    }*/
   
}
