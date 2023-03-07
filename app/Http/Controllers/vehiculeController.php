<?php

namespace App\Http\Controllers;

use App\Models\vehicule;
use Illuminate\Http\Request;
use App\Models\reserVehicule;
use Illuminate\Support\Carbon;

class vehiculeController extends Controller
{
    
    /*public function creerVehicule()
    {
        //$data=vehicule::all();
        return view('cvehicule');
    }*/
    public function pageVehicule()
    {
        return view('cvehicule');
    }
    public function UDvehicule()
    {
        $data=vehicule::all();
        return view('RUDvehicule',compact('data'));
    }

    public function insertvoiture(Request $request)
     {
        //dd($request->all());
        //if (Salle::where('nomSalle','=',''.$request->noms.'')->count()>0) {
            // return redirect()->route('test')->with('success','Cette salle existe deja ');
        //}
        //else {
            $vehi=new vehicule();
            $vehi->marque = $request->marque;
            $vehi->modele = $request->modele;
            $vehi->annee = $request->annee;
            $vehi->couleur = $request->couleur;
            $vehi->numero_plaque = $request->num_plaque;
            //$vehi->photo=$request->hasFile('photo');
            $vehi->timestamps=$request->timestamps;
            //$vehi->save();
            //return redirect()->back()->withSuccess('Enregistrement effectue avec succes !');

            /*$data=vehicule::create($request->all());*/
            if ($request->hasFile('photo')) {
                $request->file('photo')->move('photovehicule/',$request->file('photo')->getClientOriginalName());
                $vehi->photo=$request->file('photo')->getClientOriginalName();
                $vehi->save();
            }
            return redirect()->route('RUDvehicule')->with('success','Voiture cree avec succe');
     }

        public function updatevoiture($numplaque)
        {
            //$data=Salle::find($nomSalle);
            // dd($data);
            $data=vehicule::where('numero_plaque',$numplaque)->first();
            //dd($data);
            return view('uvehicule',compact('data'));
        }

        public function updatevoiturevrai(Request $request,$numplaque)
        {
            $data=vehicule::where('numero_plaque',$numplaque)->first();
            $data->update($request->all());
            return redirect()->route('RUDvehicule')->with('success','mise a jour effectuer avec succes');
        }

        public function deletevoiture($numplaque)
        {
        // $data=Salle::find($nomSalle);
        // $data->delete();
        $data=vehicule::where('numero_plaque',$numplaque);
        $data->delete();

        return redirect()->route('RUDvehicule')->with('success','voiture retire avec succes');
        }
/*--------------------------fin du CRUD de voiture---------------------------------------------*/

        public function reserveVoiture()
        {
            $vehicules = vehicule::all();
            return view('reservVehicule',compact('vehicules'));
        }
/*------------------------------affichage des vehicules et matricules des vehicules au clients-------------------------------------*/
        public function validReservation()
        {
            $data=reserVehicule::all();
            return view('adminValide',compact('data'));
        }
/*------------------------------affichage des vehicules et matricules des vehicules au clients-------------------------------------*/

        public function insertReservation(Request $request)
        {
            //dd($request->all());
            //reserVehicule::create($request->all());
            $reservation = new reserVehicule();
            $reservation->utilisateur_id = $request->id_user;
            $reservation->numero_plaque = $request->numplaque;
            $reservation->date_reservation = Carbon::now();
            $reservation->date_debut = $request->debutreserv;
            $reservation->date_fin = $request->finreserv;
            $reservation->save();
           // return redirect()->route('validReservation')->with('success','voiture retire avec succes');

            //return redirect()->back()->withSuccess('Demande de reservation effectuer avec succes !');
        }


        
/*------------------------------accepter ou refuser la reservation du vehicule par l'admin---------------*/

        public function refusereserv($numplaque)
        {
            $data=reserVehicule::where('numero_plaque',$numplaque);
            $data->delete();
            //return redirect()->route('RUDvehicule')->with('success','voiture retire avec succes');
        }
        
        
}











