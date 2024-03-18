<?php

use App\Http\Controllers\BioController;

use App\Http\Controllers\DegreeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmailverifyController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortofilController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserexperienceControoler;

use App\Http\Controllers\VectorController;

use App\Mail\Usermail;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Auth\Notifications\VerifyEmail;
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

   Route::get('/experience',[ExperienceController::class,'index'])->name('experience');
   Route::get('/experience/create',[ExperienceController::class,'create'])->name('experience.create');
   Route::post('/experience/create',[ExperienceController::class,'store'])->name('experience.store');
   Route::get('/experience/{id}/edit',[ExperienceController::class,'edit'])->name('experience.edit');
   Route::post('/experience/{id}/edit',[ExperienceController::class,'update'])->name('experience.edit');
   Route::get('/experience/{id}/destroy',[ExperienceController::class,'destroy'])->name('experience.destroy');

   Route::get('/skills',[SkillsController::class,'index'])->name('skills.list');
   Route::get('/skills/create',[SkillsController::class,'create'])->name('skills.create');
   Route::post('/skills/create',[SkillsController::class,'store'])->name('skills.store');
   Route::get('/skills/{id}/edit',[SkillsController::class,'edit'])->name('skills.edit');
   Route::post('/skills/{id}/edit',[SkillsController::class,'update'])->name('skills.edit');
   Route::get('/skills/{id}/destroy',[SkillsController::class,'destroy'])->name('skills.destroy');

   Route::get('/education',[DegreeController::class,'index'])->name('education.list');
   Route::get('/education/create',[DegreeController::class,'create'])->name('education.create');
   Route::post('/education/create',[DegreeController::class,'store'])->name('education.store');
   Route::get('/education/{id}/edit',[DegreeController::class,'edit'])->name('education.edit');
   Route::post('/education/{id}/edit',[DegreeController::class,'update'])->name('education.edit');
   Route::get('/education/{id}/destroy',[DegreeController::class,'destroy'])->name('education.destroy');


   
   Route::get('/vector',[VectorController::class,'index'])->name('vector');
   Route::post('/vector',[VectorController::class,'store'])->name('vector.store');
});

require __DIR__.'/auth.php';

  //email user
Route::get('/email',[EmailverifyController::class,'index'])->name('email');
Route::get('/verification/{token}',[EmailverifyController::class,'verify'])->name('email.verify');


Route::get('{email}',[PortofilController::class,'index'])->name('portofil');
