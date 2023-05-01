<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Salle;
use App\Models\Terrain;
use App\Models\vehicule;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use App\Models\reserVehicule;
use App\Models\reservTerrain;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthenficationController;


class AuthenficationController extends Controller
{
    //
    public function auth()
    {
        return view('login');
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
            //return response()->json(['message' => 'Accès autorisé']);
            return redirect()->route('reserveVoiture');
        }

        public function auth2()
    {
        return view('login2');
    }

        public function myFunction2(Request $request) {
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
            //return response()->json(['message' => 'Accès autorisé']);
            return redirect()->route('services');
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

    public function auth3()
    {
        return view('login3');
    }

    public function myFunction3(Request $request) {
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
        //return response()->json(['message' => 'Accès autorisé']);
        return redirect()->route('page2');
    }



    /*----------------------------administrateur specifiquement--------*/

    public function authAdmin()
    {
        return view('adminpage/loginAdmin');
    }
    
    /*public function AdminConnect(Request $request) {
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
        return view('adminpage/indexAdmin', ['user' => $user]);
    }*/

    public function AdminConnect(Request $request) {
        // Vérifier si l'utilisateur est enregistré
        $user = utilisateur::where('name', $request->name)->first();
        if (!$user) {
            return response()->json(['error' => 'Utilisateur non enregistré']);
        }
        
        // Vérifier si le matricule est correct
        $tast=$request->matricule;
        if ($user->matricule != $request->matricule) {
            return response()->json(['error' => 'Votre nom ou votre matricule sont incorrects']);
        }
        
        $count = Salle::count();
        $countv = vehicule::count();
        $countt = Terrain::count();

        /*-----------------------------------------------------*/
        $countRt=reserVehicule::count();
        $countRv=reservTerrain::count();
        $countRT=$countRt+$countRv;
        // Donner l'accès
        //return response()->json(['message' => 'Accès autorisé']);
        setcookie('user', $user, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('user->matricule', $user->matricule, time() + (86400 * 30), "/"); // 86400 = 1 day

        return view('adminpage/indexAdmin',compact('user','count','countv','countt','countRT','tast'));
    }

    

    public function recupPAdmin()
    {
        return view('adminpage/recupPAdmin');
    }
    
    public function rafreshAcc(Request $request)
    {
        $user = $request->$user->name;
        if (!$user) {
            return response()->json(['error' => 'Utilisateur non enregistré']);
        }
        
        // Vérifier si le matricule est correct
        $tast=$request->matricule;
        if ($user->matricule != $request->matricule) {
            return response()->json(['error' => 'Votre nom ou votre matricule sont incorrects']);
        }
        
        $count = Salle::count();
        $countv = vehicule::count();
        $countt = Terrain::count();

        /*-----------------------------------------------------*/
        $countRt=reserVehicule::count();
        $countRv=reservTerrain::count();
        $countRT=$countRt+$countRv;
        // Donner l'accès
        //return response()->json(['message' => 'Accès autorisé']);
        setcookie('user', $user, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('user->matricule', $user->matricule, time() + (86400 * 30), "/"); // 86400 = 1 day

        return view('adminpage/indexAdmin',compact('user','count','countv','countt','countRT','tast'));
        
    }

   /* public function updatePAdminvrai(Request $request)
    {

        $name=$request->name;
        $password=$request->matricule;
        $utilisateur=utilisateur::where('name',$name)->first();

        if ($utilisateur) 
        {
            $utilisateur=utilisateur::where('name',$name);
            $utilisateur->update($request->matricule);
        }

        // $data=utilisateur::where('matricule',$matricule)->first();
        // $data->update($request->all());
        // return redirect()->route('RUDvehicule')->with('success','mise a jour effectuer avec succes');
    }*/

    public function updatePAdminvrai(Request $request)
{
    $name = $request->input('name');
    $matricule = $request->input('matricule');
    $verification = $request->input('verification');

    $user = DB::table('utilisateurs')->where('name', $name)->first();
    if ($user) {
        if ($matricule == $verification) {
            DB::table('utilisateurs')->where('id', $user->id)->update(['matricule' => $matricule]);
            return "Password updated successfully!";
        } else {
            return "Passwords do not match.";
        }
    } else {
        return "User not found in database.";
    }
}

}
