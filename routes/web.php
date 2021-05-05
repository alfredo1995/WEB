<?php

use Illuminate\Support\Facades\Route;
//use App\MensagemTesteMail;

/*|| Web Routes||*/

//rotas home, login e register

  Route::get('/', function () { return view('index');});
//Route::get('/register', function () {    return view('register');});    rota passada para o controller
//Route::get('/login', function () {   return view('login');});           rota passada para o controller

//controller da rota login com autenticador
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])  ->name('site.login') ;
Route::post('/login', [App\Http\Controllers\LoginController::class, 'index'])  ->name('site.login') ;
Route::post('/login', [App\Http\Controllers\LoginController::class, 'autenticar'])  ->name('site.login') ;

//controller da rota register
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])  ->name('site.register') ;
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])  ->name('site.register') ;













//Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])  ->name('home')  ->middleware('verified');

//   Route::resource('tarefa', 'App\Http\Controllers\TarefaController')   ->middleware('verified');

//Route::get('/mensagem-teste', function() {
 //   return new MensagemTesteMail();
    //Mail::to('auladeespanho7@gmail.com')->send(new MensagemTesteMail());
    //return 'E-mail enviado com sucesso!';
//