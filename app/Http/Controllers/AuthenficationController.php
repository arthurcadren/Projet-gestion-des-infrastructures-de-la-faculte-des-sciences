<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthenficationController;


class AuthenficationController extends Controller
{
    //
    public function auth()
    {
        return view('authentification');
    }

    public function myFunction(Request $request) {
        // Vérifier si l'utilisateur est enregistré
        $user = utilisateur::where('name', $request->name)->first();
        if (!$user) {
            return response()->json(['error' => 'Utilisateur non enregistré']);
        }
        
        // Vérifier si le matricule est correct
        if ($user->matricule != $request->matricule) {
            return response()->json(['error' => 'Votre nom ou votre matricule sont incorrects']);
        }
        
        // Donner l'accès
        return response()->json(['message' => 'Accès autorisé']);
    }

        public function utilisateur()
        {
            return view('utilisateur');
        }

        public function insertuser(Request $request)
        {
            //dd($request->all());
            //utilisateur::create($request->all());
            $use = new utilisateur();
            $use->name = $request->noms;
            $use->matricule = $request->matricule;
            $use->email = $request->email;
            $use->save();
            //return redirect()->route('validReservation')->with('success','voiture retire avec succes');
            //return redirect()->back()->withSuccess('Demande de reservation effectuer avec succes !');
        }

    /*public function authenticate($name,$matricule)
    {
        if (Auth::attempt(['name'=>$name,'matricule'=>$matricule])) {
            return redirect()->intended('dashboard');
        }
        else
        {
            redirect()->back()->withErrors(['message'=>'Votre nom ou votre matricule sont incorrects.']);
        }
    }*/

}
