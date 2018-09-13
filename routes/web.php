<?php
use App\map;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/', function(){

	$req=request('adresse');
	$map = new map;
	$map->adresse = $req;
	$map->save();

	return view('home');
});

Route::post('/lister', function(){
	$req=request('adresse');
	$res=map::where('adresse',$req)->first();
	if ($res) 
	{
		$res1=str_replace(",", " +", $res->adresse);
		$res1=strtolower($res1);
		return view('resultat')->with("adresse", $res=$res1);
	}
});

Route::get('/afficher', function () {
    return view('rechercher');
});
