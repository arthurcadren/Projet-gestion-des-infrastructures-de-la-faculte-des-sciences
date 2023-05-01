<?php

namespace App\Http\Controllers;


use mail;
use App\Models\vehicule;
use App\Models\utilisateur;
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
        $data=vehicule::paginate(5);
        return view('RUDvehicule',compact('data'));
    }

    public function insertvoiture(Request $request)
     {
        //dd($request->all());
        //if (Salle::where('nomSalle','=',''.$request->noms.'')->count()>0) {
            // return redirect()->route('test')->with('success','Cette salle existe deja ');
        //}
        //else {
            if (Vehicule::where('numero_plaque','=',''.$request->num_plaque.'')->count()>0) {
                return redirect()->route('cVAdmin')->with('success','Impossible d\'inserer ce vehile car il existe deja');
            }
            else {
                    $vehi=new vehicule();
                    $vehi->marque = $request->marque;
                    $vehi->modele = $request->modele;
                    $vehi->annee = $request->annee;
                    $vehi->couleur = $request->couleur;
                    $vehi->numero_plaque = $request->num_plaque;
                    $vehi->timestamps=$request->timestamps;
                    if ($request->hasFile('photo')) {
                        $request->file('photo')->move('photovehicule/',$request->file('photo')->getClientOriginalName());
                        $vehi->photo=$request->file('photo')->getClientOriginalName();
                        $vehi->save();
                    }
                    return redirect()->route('cVAdmin')->with('success','Voiture cree avec succe');
            }
            
     }

        public function updatevoiture($numplaque)
        {
            //$data=Salle::find($nomSalle);
            // dd($data);
            $data=vehicule::where('numero_plaque',$numplaque)->first();
            //dd($data);
            return view('adminpage/UpdateVehicule',compact('data'));//uvehicule
        }

        public function updatevoiturevrai(Request $request,$numplaque)
        {
            $data=vehicule::where('numero_plaque',$numplaque)->first();
            $data->update($request->all());
            return redirect()->route('cVAdmin')->with('success','Salle mise a jour effectuer avec succes');
        }

        public function deletevoiture($numplaque)
        {
        // $data=Salle::find($nomSalle);
        // $data->delete();
        $data=vehicule::where('numero_plaque',$numplaque);
        $data->delete();

        return redirect()->route('listeVAdmin')->with('success','voiture retire avec succes');
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

        // Supprime la réservation en utilisant la plaque d'immatriculation

        public function refusereserv($numplaque)
        {
            // Trouve la réservation en utilisant la plaque d'immatriculation
            $reservation = reserVehicule::where('numero_plaque',$numplaque)->first();

            // Trouve l'utilisateur en utilisant la matricule trouvée dans la réservation
            $user = utilisateur::where('matricule', $reservation->utilisateur_id)->first();

            if ($user) { // Vérifie si l'objet utilisateur n'est pas nul
                // Envoie un e-mail à l'utilisateur
                $to = $user->email;
                $subject = 'Reservation refusee';
                $message = 'Votre reservation a ete refusee.';
                mail($to, $subject, $message);
                 // Envoie l'email à l'utilisateur
            } else {
                // Gère le cas où aucun utilisateur n'est trouvé pour la matricule donnée
                // ...
                return redirect()->route('validReservation')->with('success','Connection instable ou erreur du service d\'envoie veuillez verifier votre connexion ou reessayer plutard');

            }
            $reservation->delete();

             // Supprime la réservation
            //return redirect()->route('RUDvehicule')->with('success','voiture retirée avec succès');
        }

        public function acceptreserv($numplaque)
        {
            // Trouve la réservation en utilisant la plaque d'immatriculation
            $reservation = reserVehicule::where('numero_plaque',$numplaque)->first();

            // Trouve l'utilisateur en utilisant la matricule trouvée dans la réservation
            $user = utilisateur::where('matricule', $reservation->utilisateur_id)->first();

            if ($user) { // Vérifie si l'objet utilisateur n'est pas nul
                // Envoie un e-mail à l'utilisateur
                $to = $user->email;
                $subject = 'Réservation Accepte';
                $message = 'Votre demande de réservation de vehicule a l\'universite de yaounde I a été accepte.';
                mail($to, $subject, $message); // Envoie l'email à l'utilisateur
            } else {
                // Gère le cas où aucun utilisateur n'est trouvé pour la matricule donnée
                // ...
                return redirect()->route('validReservation')->with('success','Connection instable ou erreur du service d\'envoie veuillez verifier votre connexion ou reessayer plutard');

            }
            //return redirect()->route('RUDvehicule')->with('success','voiture retirée avec succès');
        }





        /*---------------------------------------disponibilite-----------------------------------------*/

        public function disponibilite()
        {
            $data = vehicule::all();
            return view('disponibilite',compact('data'));
        }

        
}











