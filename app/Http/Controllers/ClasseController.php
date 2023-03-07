<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\TimeTable;
use App\Models\utilisateur;
use Illuminate\Http\Request;


class ClasseController extends Controller
{
    public function creerSalle()
    {
        $data=Salle::all();
        return view('test',compact('data'));
    }
    public function page2()
    {
        return view('page2');
    }

    public function insertdata(Request $request)
    {
        //dd($request->all());
        // Salle::create([
        //     'noms'=>$request->noms,
        //     'capacite'=>$request->capacite,
        //     'emplacement'=>$request->emplacement,
        //      
        // ]);
        //return redirect()->route('test');
        if (Salle::where('nomSalle','=',''.$request->noms.'')->count()>0) {
             return redirect()->route('test')->with('success','Cette salle existe deja ');   
        }
        else {
            $salle=new Salle();
            $salle->nomSalle = $request->noms;
            $salle->capacite = $request->capacite;
            $salle->emplacement = $request->emplacement;
            $salle->timestamps=$request->timestamps;
            $salle->save();
            return redirect()->route('test')->with('success','Salle cree avec succe');
        }
        
    }
    public function updatedata($nomSalle)
    {
        //$data=Salle::find($nomSalle);
        // dd($data);
        $data=Salle::where('nomSalle',$nomSalle)->first();
        //dd($data);
        return view('page2Edit',compact('data'));
    }

    public function updatedatavrai(Request $request,$nomSalle)
    {
        $data=Salle::where('nomSalle',$nomSalle)->first();
        $data->update($request->all());
        return redirect()->route('test')->with('success','mise a jour effectuer avec succes');
    }

    public function deletesalle($nomSalle)
    {
        // $data=Salle::find($nomSalle);
        // $data->delete();
        $data=Salle::where('nomSalle',$nomSalle);
        $data->delete();

        return redirect()->route('test')->with('success','suppression effectue avec succes');
    }


    public function insertevenement(Request $request)
    {
         //dd($request->all());
           /* TimeTable::create([
             'jour'=>$request->Date,
             'salle'=>$request->nomSalle,
             'type'=>$request->evenement,
             'nomevent'=>$request->nomevent,
             'filiere'=>$request->filiere,
             'niveau'=>$request->niveau,
             'debut'=>$request->tempsdebut,
             'fin'=>$request->tempsfin
            ]);*/
            if (TimeTable::where('Date','=',''.$request->jour.'')
                ->where('nomSalle','=',''.$request->salle.'')
            ->where('tempsdebut','=',''.$request->debut.'')->count()>0) {
                 return redirect()->route('RUD')->with('success','Evenement a la meme heure existe deja');
                
            }
            elseif (TimeTable::where('Date','=',''.$request->jour.'')
                ->where('nomSalle','=',''.$request->salle.'')
             ->where('tempsfin','=',''.$request->fin.'')->count()>0) {
                 return redirect()->route('RUD')->with('success','Evenement ne peut pas etre cree elle est dans un intervale');
             }
            /*elseif (TimeTable::where('nomSalle','=',''.$request->salle.'')
            ->where('Date','=',''.$request->jour.'')
            ->where('tempsdebut','=',''.$request->debut.'')) {
                // $data=new TimeTable();
                // $data->evenement = $request->type;
                // $data->nomevent = $request->nomevent;
                // $data->filiere = $request->filiere;
                // $data->niveau=$request->niveau;
                // $data->Date=$request->jour;
                // $data->tempsdebut=$request->debut;
                // $data->tempsfin=$request->fin;
                // $data->nomSalle=$request->salle;
                // $data->save();
                return redirect()->route('RUD')->with('success','Evenement existe deja dans cette salle a cette heure');
            }*/
           /* elseif (TimeTable::where('Date','=',''.$request->jour.'')
            ->where('tempsfin','=',''.$request->fin.'')) {
                return redirect()->route('RUD')->with('success','Evenement existe deja dans cette salle a cette heure');
            }*/

            else {
                $data=new TimeTable();
                $data->evenement = $request->type;
                $data->nomevent = $request->nomevent;
                $data->filiere = $request->filiere;
                $data->niveau=$request->niveau;
                $data->Date=$request->jour;
                $data->tempsdebut=$request->debut;
                $data->tempsfin=$request->fin;
                $data->nomSalle=$request->salle;
                $data->save();
                return redirect()->route('RUD')->with('success','Evenement cree avec succe');
            }


            $data=new TimeTable();
        $data->evenement = $request->type;
        $data->nomevent = $request->nomevent;
        $data->filiere = $request->filiere;
        $data->niveau=$request->niveau;
        $data->Date=$request->jour;
        $data->tempsdebut=$request->debut;
        $data->tempsfin=$request->fin;
        $data->nomSalle=$request->salle;
        $data->save();
        return redirect()->route('RUD')->with('success','Evenement cree avec succe');
/*--------------------------------------------------------------------------------*/

         //dd('evenement cree');
    }
    public function RUD()
    {
        $data=TimeTable::all();
        return view('RUD',compact('data'));
    }
    public function updateevent($nomevent)
    {
         //$data=TimeTable::find($nomevent);
         $data=TimeTable::where('nomevent',$nomevent)->first();
         return view('page2EditEvent',compact('data'));
         //dd($data);
    }
    public function updateeventvrai(Request $request, $nomevent)
    {
        /*$data=TimeTable::find($nomevent);
        $data->update($request->all());*/

        $data=TimeTable::where('nomevent',$nomevent)->first();
        $data->update($request->all());
        /*$data->update([
            ''=>
        ]);*/
        


        //TimeTable::where($nomevent)->update($data);
        return redirect()->route('RUD')->with('success','Evenement mis a jour avec succe');
    }
    public function deleteevent($nomevent)
    {
        $data=TimeTable::where('nomevent',$nomevent);
        $doto=TimeTable::where('Date',$nomevent);

        $data->delete();
        $doto->delete();
        /*TimeTable::destroy($nomevent);*/
        return redirect()->route('RUD')->with('success','Supression de l\'evenement avec succe');
        
    }

    /*---------------------------- affiche emploie de temps salles--------------------------------------------*/

    /*public function show(Request $request)
    {
            // $data=TimeTable::all();
            // //dd($data);

            // return view('emploiparticulier',compact('data'));
            $data=TimeTable::where('evenement','=',''.$request->input3consult.'')->get();
            return view('emploiparticulier',compact('data'));
    }*/
    public function show(Request $request)
    {
            // $data=TimeTable::all();
            // //dd($data);
            // return view('emploiparticulier',compact('data'));
            $data=TimeTable::where('evenement','=',''.$request->input3consult.'')
            ->where('nomSalle','=',''.$request->input2consult.'')
            ->get();
            return view('emploiparticulier',compact('data'));
    }

    public function showvide(Request $request)
    {
            $data=TimeTable::where('Date','=',''.$request->imputempty.'')
            ->where('evenement','=','Vide')
            ->get();
            return view('sallevide',compact('data'));
    }
    
    





    

        
}
