<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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
Route::get('/', HomeController::class)->name('home');

/* Route::get('/', function () {
    //return view('welcome');
    return "Hola mundo Iniciando Laravel";
}); */
/* 
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/crear', [ CursoController::class, 'create'])->name('cursos.create');
// Form Create course 
Route::post('cursos', [ CursoController::class, 'store'])->name('cursos.store');


Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */


Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', function () {
    $correo = new ContactanosMailable;

    Mail::to('edson2869944@gmail.com')->send($correo);
    return "Mensaje enviado";
});