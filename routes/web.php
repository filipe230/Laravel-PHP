<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\PostController;

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


/*Route::get('/exemplo', function(){
    return "Exemplo da aula";
});*/

/*Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos-listar');

Route::get('/criar', [AlunoController::class, 'create'])->name('alunos-create');*/

/*Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos-listar');
Route::post('/alunos/criar', [AlunoController::class, 'create'])->name('alunos-create');*/

Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos-listar');
Route::get('/alunos/criar', [AlunoController::class, 'create'])->name('alunos-create');
Route::get('/posts', [PostController::class, 'index'])->name('post-listar');
