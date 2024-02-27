<?php

use App\Http\Controllers\BioController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\PortofilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\VectorController;
use App\Models\Degree;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/bio',[BioController::class,'show'])->name('bio');
    Route::post('/bio',[BioController::class,'store'])->name('bio.store');

   Route::get('/experience',[RoleController::class,'index'])->name('experience');
   Route::post('/experience',[RoleController::class,'store'])->name('experience.store');

   Route::get('/skills',[SkillsController::class,'index'])->name('skills');
   Route::post('/skills',[SkillsController::class,'store'])->name('skills.store');

   Route::get('/education',[DegreeController::class,'index'])->name('education');
   Route::post('/education',[DegreeController::class,'store'])->name('education.store');
   
   Route::get('/vector',[VectorController::class,'index'])->name('vector');
   Route::post('/vector',[VectorController::class,'store'])->name('vector.store');
});

require __DIR__.'/auth.php';

Route::get('{email}',[PortofilController::class,'index'])->name('portofil');
