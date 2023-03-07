<?php

namespace App\Http\Controllers;

use App\Models\TimeTable;
use Illuminate\Http\Request;

class EvenementController extends Controllers
{
    //
    public function insertevenement(Request $request)
    {
         dd($request->all());
            TimeTable::create([
             'jour'=>$request->Date,
             'salle'=>$request->nomSalle,
             'type'=>$request->evenement,
             'nomevent'=>$request->nomevent,
             'filiere'=>$request->filiere,
             'niveau'=>$request->niveau,
             'debut'=>$request->tempsdebut,
             'fin'=>$request->tempsfin,
            ]);
        //  $timetable=new TimeTable();
        //  $timetable->Date=$request->jour;
        //  $timetable->nomSalle=$request->salle;
        //  $timetable->evenement=$request->type;
        //  $timetable->nomevent=$request->nomevent;
        //  $timetable->filiere=$request->filiere;
        //  $timetable->niveau=$request->niveau;
        //  $timetable->tempsdebut=$request->debut;
        //  $timetable->tempsfin=$request->fin;
        //  $timetable->save();

         dd('evenement cree');
        //return redirect()->route('test');
    }

}
