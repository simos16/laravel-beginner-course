<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Notes;

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
//Route per tutte le note
/* Route::get('/', function () {
    return view('notes', [
        'intestazione' => 'le ultime note',
        'contents' => Notes::all()
    ]);
}); */

//Rotta con controller per lista note
//'App\Http\Controllers\NoteController@index'
Route::get('/',  [NoteController::class, 'index']);

//Route per singola nota senza controllo de l dato non esistente
/*Route::get('/notes/{id}', function($id){
    return view('note', [
        'note' => Notes::find($id)
    ]);
}); */

//Route per singola nota con controllo del dato non esistente
/*Route::get('/notes/{id}', function($id){
    $nota =  Notes::find($id);
    if($nota){
        return view('note',  [
            'note' =>  $nota
        ]);
    }else{
        abort('404');
    }
}); */

/* Route::get('/notes/{nota}', function(Notes $nota){

        return view('note',  [
            'note' =>  $nota
        ]);

}); */
//Rotta per form di creazione nota
Route::get('/notes/create',   [NoteController::class, 'create'])->middleware('auth');
//Rotta per salvare la nuova   nota
Route::post('/notes',   [NoteController::class, 'store'])->middleware('auth');

//Rotta per form di modifica  nota
Route::get('/notes/{nota}/edit',   [NoteController::class, 'edit'])->middleware('auth');

//Rotta per  modifica  nota
Route::put('/notes/{nota}',   [NoteController::class, 'update'])->middleware('auth');

//Rotta per  cancellare la   nota
Route::delete('/notes/{nota}',   [NoteController::class, 'delete'])->middleware('auth');

//Rotta per  cancellare la   nota
Route::get('/manage',   [NoteController::class, 'manage'])->middleware('auth');

//Rotta per nota singola con controller
Route::get('/notes/{nota}',   [NoteController::class, 'show']);

//Rotta per mostrare la form di registarzione
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Rotta per salvare i nuovi utenti
Route::post('/users', [UserController::class, 'store']);
//Rotta per logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Rotta per login
Route::get('/login', [UserController::class, 'login']) ->name('login')->middleware('guest');

//Rotta per login
Route::post('users/authenticate', [UserController::class, 'authenticate']);





Route::get('/saluto', function(){
    // return 'Ciao da Laravel';

    return response('<h1>Ciao da Laravel</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('chiave', 'messaggio custom');
});

Route::get('articoli/{id}' , function($id){
    //dump, die, debug
    //ddd($id);

    return response('Post '  . $id);
})
    ->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    dd($request);
    return $request->nome .  '  ' . $request->apiKey;
});
