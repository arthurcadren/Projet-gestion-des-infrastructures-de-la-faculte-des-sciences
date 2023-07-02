<?php

use App\Models\Price;
use App\Models\Garage;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\AdminController;
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


 /*Route::get('/', function () {
     return view('about');
 });*/
/*Route::get('/', function () {
    return view('acceuil');
});*/
Route::get('/',[ClasseController::class,'home'])->name('home');
Route::get('/contact',[ClasseController::class,'contact'])->name('contact');
Route::get('/services',[ClasseController::class,'services'])->name('services');
Route::get('/login',[ClasseController::class,'login'])->name('login');
Route::get('/signup',[ClasseController::class,'signup'])->name('signup');
Route::get('/about',[ClasseController::class,'about'])->name('about');
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
Route::get('/sallevide',[ClasseController::class,'showvide'])->name('showvide');

Route::get('/deleteevent/{nomevent}/{Date}/{tempsdebut}/{tempsfin}',[ClasseController::class,'deleteevent'])->name('deleteevent');

/*-------------------------------------------------------------------------------------*/

Route::get('/emploiparticulier',[ClasseController::class,'show'])->name('show');


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
Route::get('/acceptreserv/{numplaque}',[vehiculeController::class,'acceptreserv'])->name('acceptreserv');





/*------------------------------------------partie qui concerne les terrains enregistrement des terrains--------------- */
Route::post('/insertterrain',[TerrainController::class,'insertterrain'])->name('insertterrain');
Route::get('/RUDterrain',[TerrainController::class,'UDterrain'])->name('RUDterrain');
Route::get('/pageTerrain',[TerrainController::class,'pageTerrain'])->name('pageTerrain');
Route::get('/deleteterrain/{id}',[TerrainController::class,'deleteterrain'])->name('deleteterrain');
Route::get('/updateterrain/{phototerrain}',[TerrainController::class,'updateterrain'])->name('updateterrain');
Route::post('/updateterrainvrai/{phototerrain}',[TerrainController::class,'updateterrainvrai'])->name('updateterrainvrai');

Route::get('/reserveTerrain',[TerrainController::class,'reserveTerrain'])->name('reserveTerrain');
Route::post('/ReservationTerrain',[TerrainController::class,'ReservationTerrain'])->name('ReservationTerrain');

Route::get('/validReservationTerrain',[TerrainController::class,'validReservationTerrain'])->name('validReservationTerrain');
Route::get('/refuseterrain/{id}',[TerrainController::class,'refuseterrain'])->name('refuseterrain');

Route::get('/auth2',[AuthenficationController::class,'auth2'])->name('auth2');
Route::post('/myFunction2',[AuthenficationController::class,'myFunction2'])->name('check2');

Route::get('/login3',[AuthenficationController::class,'auth3'])->name('login3');
Route::post('/myFunction3',[AuthenficationController::class,'myFunction3'])->name('check3');



Route::get('/disponibilite',[vehiculeController::class,'disponibilite'])->name('disponibilite');





/*-------------------------------------page administrateur-------------------------------------------*/

// Route::get('/page1Admin',[AdminController::class,'page1Admin'])->name('page1Admin');
Route::get('/salleVideAdmin',[AdminController::class,'salleVideAdmin'])->name('salleVideAdmin');
Route::get('/EmSalleAdmin',[AdminController::class,'EmploieSalleAdmin'])->name('EmSalleAdmin');
Route::get('/cVAdmin',[AdminController::class,'creerVehicueAdmin'])->name('cVAdmin');
Route::get('/validRAdmin',[AdminController::class,'validRAdmin'])->name('validRAdmin');
Route::get('/creerSAdmin',[AdminController::class,'creerSAdmin'])->name('creerSAdmin');
Route::get('/creerTAdmin',[AdminController::class,'creerTAdmin'])->name('creerTAdmin');
Route::get('/creerEAdmin',[AdminController::class,'creerEAdmin'])->name('creerEAdmin');
Route::get('/loginAdmin',[AdminController::class,'loginAdmin'])->name('loginAdmin');
Route::get('/registerAdmin',[AdminController::class,'registerAdmin'])->name('registerAdmin');
Route::get('/listeCAdmin',[AdminController::class,'listeCAdmin'])->name('listeCAdmin');
Route::get('/listeVAdmin',[AdminController::class,'listeVAdmin'])->name('listeVAdmin');
Route::get('/listeTAdmin',[AdminController::class,'listeTAdmin'])->name('listeTAdmin');
Route::get('/notifAdmin',[AdminController::class,'notifAdmin'])->name('notifAdmin');
Route::post('/envoyer-message',[AdminController::class,'sendMessage'])->name('envoyer-message');
Route::get('/nbSalle',[AdminController::class,'nombreDeSalles'])->name('nbSalle');
Route::get('/EGeneral',[AdminController::class,'EGeneral'])->name('EGeneral');
Route::get('/showvideAdmin',[AdminController::class,'showvideAdmin'])->name('showvideAdmin');
Route::get('/creerEEAdmin',[AdminController::class,'creerEEAdmin'])->name('creerEEAdmin');

/*-------------------------------voir les info des terrain vehicules classe---------------------*/

Route::get('/vinfoVehicule/{numplaque}',[AdminController::class,'vinfoVehicule'])->name('vinfoVehicule');
Route::get('/vinfoTerrain/{phototerrain}',[AdminController::class,'vinfoTerrain'])->name('vinfoTerrain');
Route::get('/vinfoSalle/{nomSalle}',[AdminController::class,'vinfoSalle'])->name('vinfoSalle');

/*------------------------------voir les info des terrain vehicules classe----------------------*/







Route::post('/rafreshAcc',[AuthenficationController::class,'rafreshAcc'])->name('rafreshAcc');







Route::get('/authAdmin',[AuthenficationController::class,'authAdmin'])->name('authAdmin');
Route::post('/AdminConnect',[AuthenficationController::class,'AdminConnect'])->name('AdminConnect');


Route::get('/recupPAdmin',[AuthenficationController::class,'recupPAdmin'])->name('recupPAdmin');
Route::post('/updatePAdminvrai',[AuthenficationController::class,'updatePAdminvrai'])->name('updatePAdminvrai');
















Route::get('/app',[AdminController::class,'app'])->name('app');



Route::get('/reserveVtest',[vehiculeController::class,'reserveVtest'])->name('reserveVtest');
Route::get('/infoVsingle/{numplaque}',[vehiculeController::class,'infoVsingle'])->name('infoVsingle');

Route::get('/reserveTtest',[TerrainController::class,'reserveTtest'])->name('reserveTtest');
Route::get('/infoTsingle/{phototerrain}',[TerrainController::class,'infoTsingle'])->name('infoTsingle');


/*--------------------------------------export au format pdf--------------------------------------------*/
Route::get('/exportpdf',[AdminController::class,'exportpdf'])->name('exportpdf');
/*--------------------------------------export au format pdf--------------------------------------------*/



/*-------------------------------- system de reservation de parking-------------------------------------*/

/*Route::post('/auth/register',[AuthController::class,'register']);
Route::post('/auth/token',[AuthController::class,'token']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('me',[UserController::class,'me']);

});*/








Route::get('mike',function(){
    return new GarageResourceCollection(Garage::get());
});







