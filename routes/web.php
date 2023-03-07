<?php

use App\Models\Price;
use App\Models\Garage;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\vehiculeController;
use App\Http\Controllers\AuthenficationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/test',[ClasseController::class,'creerSalle'])->name('test');
Route::get('/page2',[ClasseController::class,'page2'])->name('page2');
Route::post('/insertdata',[ClasseController::class,'insertdata'])->name('insertdata');

Route::get('/updatedata/{nomSalle}',[ClasseController::class,'updatedata'])->name('updatedata');
Route::post('/updatedatavrai/{nomSalle}',[ClasseController::class,'updatedatavrai'])->name('updatedatavrai');

Route::get('/deletesalle/{nomSalle}',[ClasseController::class,'deletesalle'])->name('deletesalle');



/*-----------------------------------------CRUD evenement--------------------------------------------------*/
Route::get('/RUD',[ClasseController::class,'RUD'])->name('RUD');
Route::post('/insertevenement',[ClasseController::class,'insertevenement'])->name('insertevenement');

Route::get('/updateevent/{nomevent}',[ClasseController::class,'updateevent'])->name('updateevent');
Route::post('/updateeventvrai/{nomevent}',[ClasseController::class,'updateeventvrai'])->name('updateeventvrai');

Route::get('/deleteevent/{nomevent}',[ClasseController::class,'deleteevent'])->name('deleteevent');

/*-------------------------------------------------------------------------------------*/

Route::get('/emploiparticulier',[ClasseController::class,'show'])->name('show');
Route::get('/sallevide',[ClasseController::class,'showvide'])->name('showvide');


/*--------------------------------- Authentification des utilisateurs----------------------------------------------------*/

Route::get('/auth',[AuthenficationController::class,'auth'])->name('auth');
Route::post('/myFunction',[AuthenficationController::class,'myFunction'])->name('check');
//Route::post('/check-user', 'UserController@checkUser');
//Route::get('/login',[AuthenficationController::class,'authenticate'])->name('login');

//Route::get('/auth',[AuthController::class,'auth'])->name('auth');
Route::get('/pageVehicule',[vehiculeController::class,'pageVehicule'])->name('pageVehicule');
Route::get('/RUDvehicule',[vehiculeController::class,'UDvehicule'])->name('RUDvehicule');

Route::post('/insertvoiture',[vehiculeController::class,'insertvoiture'])->name('insertvoiture');
Route::get('/updatevoiture/{numplaque}',[vehiculeController::class,'updatevoiture'])->name('updatevoiture');
Route::post('/updatevoiturevrai/{numplaque}',[vehiculeController::class,'updatevoiturevrai'])->name('updatevoiturevrai');

Route::get('/deletevoiture/{numplaque}',[vehiculeController::class,'deletevoiture'])->name('deletevoiture');

Route::get('/reserveVoiture',[vehiculeController::class,'reserveVoiture'])->name('reserveVoiture');

/*---------------------------------formulaire de reservation de vehicule--------------------------------------------*/
Route::get('/validReservation',[vehiculeController::class,'validReservation'])->name('validReservation');
Route::post('/insertReservation',[vehiculeController::class,'insertReservation'])->name('insertReservation');

Route::get('/utilisateur',[AuthenficationController::class,'utilisateur'])->name('utilisateur');
Route::post('/insertuser',[AuthenficationController::class,'insertuser'])->name('insertuser');

Route::get('/refusereserv/{numplaque}',[vehiculeController::class,'refusereserv'])->name('refusereserv');






/*------------------------------------------partie qui concerne les terrains enregistrement des terrains--------------- */
Route::post('/insertterrain',[TerrainController::class,'insertterrain'])->name('insertterrain');
Route::get('/RUDterrain',[TerrainController::class,'UDterrain'])->name('RUDterrain');
Route::get('/pageTerrain',[TerrainController::class,'pageTerrain'])->name('pageTerrain');
Route::get('/deleteterrain/{phototerrain}',[TerrainController::class,'deleteterrain'])->name('deleteterrain');
Route::get('/updateterrain/{phototerrain}',[TerrainController::class,'updateterrain'])->name('updateterrain');
Route::post('/updateterrainvrai/{phototerrain}',[TerrainController::class,'updateterrainvrai'])->name('updateterrainvrai');

Route::get('/reserveTerrain',[TerrainController::class,'reserveTerrain'])->name('reserveTerrain');
Route::post('/ReservationTerrain',[TerrainController::class,'ReservationTerrain'])->name('ReservationTerrain');

Route::get('/validReservationTerrain',[TerrainController::class,'validReservationTerrain'])->name('validReservationTerrain');
Route::get('/refuseterrain/{id}',[TerrainController::class,'refuseterrain'])->name('refuseterrain');



























/*-------------------------------- system de reservation de parking-------------------------------------*/

/*Route::post('/auth/register',[AuthController::class,'register']);
Route::post('/auth/token',[AuthController::class,'token']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('me',[UserController::class,'me']);

});*/

Route::get('mike',function(){
    return new GarageResourceCollection(Garage::get());
});







