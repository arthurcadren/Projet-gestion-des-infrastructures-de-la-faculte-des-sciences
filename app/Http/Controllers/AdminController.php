<?php

namespace App\Http\Controllers;


use DateTime;
use DatePeriod;
use DateInterval;
use App\Models\Salle;
use App\Models\Terrain;
use App\Models\vehicule;
use App\Models\TimeTable;
use Illuminate\Http\Request;
use App\Models\reserVehicule;
use App\Models\reservTerrain;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use PDF;

class AdminController extends Controller
{
    // public function page1Admin()
    // {
    //     return view('adminpage/indexAdmin');
    // }
    public function salleVideAdmin()
    {
        return view('adminpage/salleVideAdmin');
    }
    public function EmploieSalleAdmin()
    {
        $salles = Salle::all();
        return view('adminpage/EmploieSalleAdmin',['salles' => $salles]);
    }
    public function creerVehicueAdmin()
    {
        return view('adminpage/creerVAdmin');
    }
    public function validRAdmin()
    {
        $data=reserVehicule::all();
        $doto=reservTerrain::all();
        return view('adminpage/validRAdmin',compact('data','doto'));
    }
    public function creerSAdmin()
    {
        return view('adminpage/creerSAdmin');
    }
    public function creerTAdmin()
    {
        return view('adminpage/creerTAdmin');
    }
    public function creerEAdmin()
    {
        $salles = Salle::all();
        return view('adminpage/creerEAdmin',['salles' => $salles]);
    }

    /*-------------------------------------pour la mise a jour des salles-------------------------------*/

    


    /*-------------------------------------pour la mise a jour des salles-------------------------------*/


    public function loginAdmin()
    {
        return view('adminpage/loginAdmin');
    }
    public function registerAdmin()
    {
        return view('adminpage/registerAdmin');
    }
    
    public function listeCAdmin()
    {
        $salles = Salle::all();
        return view('adminpage/listeCAdmin',['salles' => $salles]);
    }

    public function listeVAdmin()
    {
        $vehicules = vehicule::all();
        return view('adminpage/listeVAdmin',['vehicules' => $vehicules]);
    }

    public function listeTAdmin()
    {
        $terrains = Terrain::all();
        return view('adminpage/listeTAdmin',['terrains' => $terrains]);
    }

    public function notifAdmin()
    {
        return view('adminpage/notifAdmin');
    }

    // public function envoyerMessage(Request $request)
    // {
    //     $message=$request->notif;
    //     return redirect()->route('page2')->with($message);
    // }

    public function sendMessage(Request $request)
    {
         $notif = $request->input('notif');
         setcookie('notif', $notif, time() + (86400 * 30), "/"); // 86400 = 1 day
         //redirect('/notifAdmin');
         return redirect()->back()->withSuccess('Demande de reservation effectuer avec succes !');
        /*$notif = $request->input('notif');
        Session::flash('notif', $notif);
        return redirect('/page2');*/
    }

    public function nombreDeSalles()
    {
        $count = Salle::count();
        return view('indexAdmin', ['count' => $count]);
    }

    /*public function EGeneral(Request $request)
    {
        
        $data = TimeTable::where('evenement','=',''.$request->input3consult.'')
        ->where('nomSalle','=',''.$request->input2consult.'')
        ->get();

        return view('adminpage/EGeneral',compact('data'));
    }*/
    public function EGeneral(Request $request)
    {
        if($request->has('search'))
        {
                //$data=TimeTable::where('Date','LIKE','%'.$request->search.'%')
                $data=TimeTable::where('Date','=',''.$request->search.'')
                ->where('nomSalle','=',''.$request->input2consult.'')
                ->get();
                
        }else {
            $data = TimeTable::where('evenement','=',''.$request->input3consult.'')
        ->where('nomSalle','=',''.$request->input2consult.'')
        ->get();
        }
        return view('adminpage/EGeneral',compact('data'));
    }

    public function showvideAdmin(Request $request)
    {
            $data=TimeTable::where('Date','=',''.$request->imputempty.'')
            ->where('evenement','=','Vide')
            ->get();
            return view('adminpage/EmptyClass',compact('data'));
    }
    /*public function showvideAdmin(Request $request) {
        $room = $request->input('nomSalle');
        $day = $request->input('Date');
      
        // Get the booked time slots for the specified room and day
        $bookedSlots = DB::table('time_tables')
          ->where([
            ['nomSalle', '=', $room],
            ['Date', '=', $day]
          ])
          ->select('tempsdebut', 'tempsfin')
          ->get();
      
        // Create a list of all possible time slots for the given day
        $start = new DateTime('07:00');
        $end = new DateTime('22:00');
        $interval = new DateInterval('PT30M'); // 30-minute intervals
        $ranges = new DatePeriod($start, $interval, $end);
        $allSlots = [];
        foreach ($ranges as $range) {
          $startTime = $range->format('H:i');
          $endTime = $range->add($interval)->format('H:i');
          $allSlots[] = [$startTime, $endTime];
        }
      
        // Remove the booked time slots from the list of all time slots
        $availableSlots = $allSlots;
        foreach ($bookedSlots as $slot) {
          $start = $slot->tempsdebut;
          $end = $slot->tempsfin;
          $availableSlots = array_filter($availableSlots, function ($slot) use ($start, $end) {
            return $slot[0] >= $end || $slot[1] <= $start;
          });
        }
      
        // Convert the available slots to TimeTable objects for display in the view
        $data = collect();
        foreach ($availableSlots as $slot) {
          $data->push(new TimeTable([
            'evenement' => 'Vide',
            'filiere' => '',
            'niveau' => '',
            'Date' => $day,
            'tempsdebut' => $slot[0],
            'tempsfin' => $slot[1],
            'nomSalle' => $room
          ]));
        }
      
        return view('adminpage/EmptyClass', compact('data'));
      }*/
      
      


    /*----------------------------voir les info des salles terrains et des vehicules------------------*/

        public function vinfoVehicule($numplaque)
        {
            $data=vehicule::where('numero_plaque',$numplaque)->first();
            return view('adminpage/vinfoVehicule',compact('data'));
        }
        public function vinfoTerrain($phototerrain)
        {
            $data=Terrain::where('phototerrain',$phototerrain)->first();
            return view('adminpage/vinfoTerrain',compact('data'));
        }
        public function vinfoSalle($nomSalle)
        {
            $data=Salle::where('nomSalle',$nomSalle)->first();
            return view('adminpage/vinfoSalle',compact('data'));
        }

    /*----------------------------voir les info des salles terrains et des vehicules------------------*/


    /*--------------------------------------export au format pdf--------------------------------------------*/
        /*public function exportpdf(Request $request)
        {
            //$data=TimeTable::all();
            $data = TimeTable::where('evenement','=',''.$request->input3consult.'')
            ->where('nomSalle','=',''.$request->input2consult.'')
            ->get();

            view()->share('data',$data);
            $pdf=\PDF::loadview('adminpage/EGeneral-pdf');

            return $pdf->download('data.pdf');
        }*/
        public function exportpdf(Request $request)
        {
            $data = TimeTable::where('evenement','=',$request->input3consult)
                ->where('nomSalle','=',$request->input2consult)
                ->get();

            $pdf = \PDF::loadView('adminpage.EGeneral-pdf', compact('data'));

            return $pdf->download('data.pdf');
        }
    /*--------------------------------------export au format pdf--------------------------------------------*/


    public function app()
    {
        return view('adminpage/app');
    }

    
}
