<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/',[HomeController::class, 'index'] );
|
*/
//Route:: post ('/events/create', [EventController::class, 'store'])->middleware('auth') ;

Route::get('/', [EventController::class, 'index'])->middleware('auth');

//Command/method middleware has taking login user()

//

Route:: get ('/events/create', [EventController::class, 'create']) ->middleware('auth');

Route:: post ('/event', [EventController::class, 'store']) ->middleware('auth');



Route:: get ('/events/{id}', [EventController::class, 'show'] )->middleware('auth') ;

Route:: get('dashboard',[EventController::class,'dashboard'])->middleware('auth') ;

Route:: delete ('/events/{id}', [EventController::class, 'destroy'])->middleware('auth') ;

Route:: get('/events/edit/{id}',[EventController::class,'edit'])->middleware('auth');
//It has updating data base

Route:: put('events/update/{id}',[EventController::class,'update']) ->middleware('auth');



    /*

    $nome = "Breno";
    $idade = 36;
    $vetor =  [1,2,3,5,6];
    $nomes = ["Ramos", "Sousa", "Maria"];

    return view(
        'welcome', ['nome' => $nome,
        'idade' => $idade,
        'profissao' => "Engenheiro",
        'vetor' =>$vetor,
        'nomes'=> $nomes
    ]);


});
*/

        /*It is login, log of route: It has creatting throught comamand: node and wire, it needs to install node.js https://nodejs.org/pt-br/download/

//It has checking migrate, the tables
php artisan migrate:status

//It has updating Data Base
 php artisan migrate
        composer require laravel/jetstream
        php artisan jetstream:install livewire
        npm install
        npm run dev

         It  does to link:

http://localhost:8000/login

http://localhost:8000/register

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
        */
