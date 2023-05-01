<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Terrain;
use Illuminate\Http\Request;
use App\Models\reservTerrain;
use App\Http\Controllers\TerrainController;

class TerrainController extends Controller
{
    

    public function pageTerrain()
    {
        return view('cvehicule');
    }

    public function insertterrain(Request $request)
     {
        //dd($request->all());
        //if (Salle::where('nomSalle','=',''.$request->noms.'')->count()>0) {
            // return redirect()->route('test')->with('success','Cette salle existe deja ');
        //}
        //else {
            $terrain=new Terrain();
            $terrain->type = $request->type;
            $terrain->dimension = $request->dimension;
            $terrain->emplacement= $request->emplacement;
            //$vehi->photo=$request->hasFile('photo');
            $terrain->timestamps=$request->timestamps;
            //$vehi->save();
            //return redirect()->back()->withSuccess('Enregistrement effectue avec succes !');

            /*$data=vehicule::create($request->all());*/
            if ($request->hasFile('phototerrain')) {
                $request->file('phototerrain')->move('phototerrain/',$request->file('phototerrain')->getClientOriginalName());
                $terrain->phototerrain=$request->file('phototerrain')->getClientOriginalName();
                $terrain->save();
            }
            return redirect()->route('creerTAdmin')->with('success','Terrain cree avec succe');
     }


     public function UDterrain()
    {
        $data=Terrain::all();
        return view('RUDterrain',compact('data'));//RUDterrain
    }

        public function deleteterrain($id)
        {
        // $data=Salle::find($nomSalle);
        // $data->delete();
        $data=Terrain::where('id',$id);
        $data->delete();
        return redirect()->route('listeTAdmin')->with('success','terrain retire avec succes');
        }

        public function updateterrain($phototerrain)
        {
            //$data=Salle::find($nomSalle);
            // dd($data);
            $data=Terrain::where('phototerrain',$phototerrain)->first();
            //dd($data);
            return view('adminpage/UpdateTerrain',compact('data'));
        }

        public function updateterrainvrai(Request $request,$phototerrain)
        {
            $data=Terrain::where('phototerrain',$phototerrain)->first();
            $data->update($request->all());
            return redirect()->route('RUDterrain');//->with('success','mise a jour effectuer avec succes');
        }



        public function reserveTerrain()
        {
            $terrains =Terrain::all();
            return view('reservTerrain',compact('terrains'));
        }

        public function ReservationTerrain(Request $request)
        {
            //dd($request->all());
            //reserVehicule::create($request->all());
            $reservation = new reservTerrain();
            $reservation->terrain_id = $request->idTerrain;
            $reservation->jour = Carbon::now();
            $reservation->jourdeprise = $request->jour;
            $reservation->debut = $request->debutreserv;
            $reservation->fin = $request->finreserv;
            $reservation->motif = $request->motif;
            $reservation->save();
           // return redirect()->route('validReservation')->with('success','voiture retire avec succes');

            //return redirect()->back()->withSuccess('Demande de reservation effectuer avec succes !');
        }


        /*------------------------------affichage des Terrains reserve par les users-------------------------------------*/
        public function validReservationTerrain()
        {
            $data=reservTerrain::all();
            return view('adminValideTerrain',compact('data'));
        }
/*--------------------------------------affichage des Terrains  reserve par les users-------------------------------------*/


        public function refuseterrain($id)
        {
            $data=reservTerrain::where('id',$id);
            $data->delete();
            //return redirect()->route('RUDvehicule')->with('success','voiture retire avec succes');
        }

        public function acceptterrain($id)
        {
            $data=reservTerrain::where('id',$id);
            
        }
}
