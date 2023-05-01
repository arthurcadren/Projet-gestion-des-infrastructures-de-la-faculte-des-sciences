<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\TimeTable;
use App\Models\utilisateur;
use Illuminate\Http\Request;


class ClasseController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function about()
    {
        return view('about');
    }
    public function creerSalle(Request $request)
    {
        //$data=Salle::all();
        if ($request->has('search')) {
            $data=Salle::where('nomSalle','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else {
            $data=Salle::paginate(5);
        }
        return view('listeCAdmin',compact('data'));//test
        
    }
    public function page2()
    {
        $salles = Salle::all();
        return view('page2',['salles' => $salles]);
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
             return redirect()->route('creerSAdmin')->with('success','Cette salle existe deja ');   
        }
        else {
            $salle=new Salle();
            $salle->nomSalle = $request->noms;
            $salle->capacite = $request->capacite;
            $salle->emplacement = $request->emplacement;
            $salle->timestamps=$request->timestamps;
            $salle->save();
            return redirect()->route('creerSAdmin')->with('success','Salle cree avec succe');
        }
        
    }
    public function updatedata($nomSalle)
    {
        //$data=Salle::find($nomSalle);
        // dd($data);
        $data=Salle::where('nomSalle',$nomSalle)->first();
        //dd($data);
        return view('adminpage/UpdateSalle',compact('data'));
    }

    public function updatedatavrai(Request $request,$nomSalle)
    {
        $data=Salle::where('nomSalle',$nomSalle)->first();
        $data->update($request->all());
        return redirect()->route('creerSAdmin')->with('success','Salle mise a jour effectuer avec succes');//test
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
     //check if there is an event already scheduled in the same room at the same time
    if (TimeTable::where('Date','=',$request->jour)
                ->where('nomSalle','=',$request->salle)
                ->where(function ($query) use ($request){
                    $query->where(function ($query) use ($request){
                        $query->where('tempsdebut','>=',$request->debut)->where('tempsdebut','<',$request->fin);
                    })
                    ->orWhere(function ($query) use ($request){
                        $query->where('tempsfin','>',$request->debut)->where('tempsfin','<=',$request->fin);
                    })
                    ->orWhere(function ($query) use ($request){
                        $query->where('tempsdebut','<=',$request->debut)->where('tempsfin','>=',$request->fin);
                    });
                })->count()>0) 
    {
        return redirect()->route('creerEAdmin')->with('success','Erreur: un événement est déjà prévu à cette heure et dans cette salle');
        
    }
    else 
    {
        $data = new TimeTable();
        $data->evenement = $request->type;
        $data->nomevent = $request->nomevent;
        $data->filiere = $request->filiere;
        $data->niveau=$request->niveau;
        $data->Date=$request->jour;
        $data->tempsdebut=$request->debut;
        $data->tempsfin=$request->fin;
        $data->nomSalle=$request->salle;
        $data->save();
        return redirect()->route('creerEAdmin')->with('success','Evenement cree avec succès');
    }
}

/*
    public function insertevenement(Request $request)
    {
         
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
/*--------------------------------------------------------------------------------

         //dd('evenement cree');
    }*/

    public function RUD(Request $request)
    {
        if ($request->has('search')) {
            $data=TimeTable::where('nomevent','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else {
            $data=TimeTable::paginate(5);
        }
        // $data=TimeTable::all();
        return view('RUD',compact('data'));
    }
    public function updateevent($nomevent)
    {
         //$data=TimeTable::find($nomevent);
         $data=TimeTable::where('nomevent',$nomevent)->first();
         $salles = Salle::all();
         return view('adminpage/UpdateEvent',compact('data','salles'));//page2EditEvent
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
        return redirect()->route('creerEAdmin')->with('success','Evenement mis a jour avec succe');//RUD
    }
    /*public function deleteevent($nomevent)
    {
        $data=TimeTable::where('nomevent',$nomevent);
        $doto=TimeTable::where('Date',$nomevent);

        $data->delete();
        $doto->delete();
        
        return redirect()->route('RUD')->with('success','Supression de l\'evenement avec succe');
        
    }*/
   

    public function deleteevent($nomevent,$Date,$tempsdebut,$tempsfin) 
    {
        $data=TimeTable::where('nomevent', $nomevent)
                         ->where('Date', $Date)
                         ->where('tempsdebut', $tempsdebut)
                         ->where('tempsfin', $tempsfin)
                         ->delete();
        return redirect()->route('RUD')->with('success', 'Suppression de l\'evenement avec succès');
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

            $data = TimeTable::where('evenement','=',''.$request->input3consult.'')
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

            

            


        
}






