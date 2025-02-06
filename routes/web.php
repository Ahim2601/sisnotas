<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;


//Route::get('/', function () {
//  return redirect()->route('login');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');
Route::get('/productos', [HomeController::class, 'productos'])->name('productos');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    # Roles
    Route::get('/roles', [RolController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RolController::class, 'store'])->name('roles.store');
    Route::get('/roles/{role}/edit', [RolController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{role}', [RolController::class, 'update'])->name('roles.update');
    Route::get('/roles/{role}', [RolController::class, 'destroy'])->name('roles.destroy');

    # Usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/usuarios/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('/usuarios/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    #Materias (subject)
    Route::get('/materias', [SubjectController::class, 'index'])->name('subjects.index');
    Route::get('/materias/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('/materias/store', [SubjectController::class, 'store'])->name('subjects.store');
    Route::get('/materias/{subjects}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
    Route::put('/materias/{subjects}/update', [SubjectController::class, 'update'])->name('subjects.update');
    Route::get('/materias/{subjects}/delete', [SubjectController::class, 'destroy'])->name('subjects.destroy');


     #Estudiantes
    Route::get('/estudiantes', [StudentController::class, 'index'])->name('students.index');
    Route::get('/estudiantes/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/estudiantes/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/estudiantes/{students}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/estudiantes/{students}/update', [StudentController::class, 'update'])->name('students.update');
    Route::get('/estudiantes/{students}/delete', [StudentController::class, 'destroy'])->name('students.destroy');

     #profesores
     Route::get('/profesores', [ProfessorController::class, 'index'])->name('professors.index');
     Route::get('/profesores/create', [ProfessorController::class, 'create'])->name('professors.create');
     Route::post('/profesores/store', [ProfessorController::class, 'store'])->name('professors.store');
     Route::get('/profesores/{professors}/edit', [ProfessorController::class, 'edit'])->name('professors.edit');
     Route::put('/profesores/{professors}/update', [ProfessorController::class, 'update'])->name('professors.update');
     Route::get('/profesores/{professors}/delete', [ProfessorController::class, 'destroy'])->name('professors.destroy');

       #pinscripcion
     Route::get('/inscripciones', [RegistrationController::class, 'index'])->name('registrations.index');
     Route::get('/inscripciones/create', [RegistrationController::class, 'create'])->name('registrations.create');
     Route::post('/inscripciones/store', [RegistrationController::class, 'store'])->name('registrations.store');
     Route::get('/inscripciones/{professors}/edit', [RegistrationController::class, 'edit'])->name('registrations.edit');
     Route::put('/inscripciones/{professors}/update', [RegistrationController::class, 'update'])->name('registrations.update');
     Route::get('/inscripciones/{professors}/delete', [RegistrationController::class, 'destroy'])->name('registrations.destroy');

       #trimestre
     Route::get('/trimestres', [QuarterController::class, 'index'])->name('quarters.index');
     Route::get('/trimestres/create', [QuarterController::class, 'create'])->name('quarters.create');
     Route::post('/trimestres/store', [QuarterController::class, 'store'])->name('quarters.store');
     Route::get('/trimestres/{registrations}/edit', [QuarterController::class, 'edit'])->name('quarters.edit');
     Route::put('/trimestres/{registrations}/update', [QuarterController::class, 'update'])->name('quarters.update');
     Route::get('/trimestres/{registrations}/delete', [QuarterController::class, 'destroy'])->name('quarters.destroy');

      #institucion
      Route::get('/instituciones', [InstitutionController::class, 'index'])->name('institutions.index');
      Route::get('/instituciones/create', [InstitutionController::class, 'create'])->name('institutions.create');
      Route::post('/instituciones/store', [InstitutionController::class, 'store'])->name('institutions.store');
      Route::get('/instituciones/{institutions}/edit', [InstitutionController::class, 'edit'])->name('institutions.edit');
      Route::put('/instituciones/{institutions}/update', [InstitutionController::class, 'update'])->name('institutions.update');
      Route::get('/instituciones/{institutions}/delete', [InstitutionController::class, 'destroy'])->name('institutions.destroy');

       #institucion
       Route::get('/cursos', [CourseController::class, 'index'])->name('courses.index');
       Route::get('/cursos/create', [CourseController::class, 'create'])->name('courses.create');
       Route::post('/cursos/store', [CourseController::class, 'store'])->name('courses.store');
       Route::get('/cursos/{courses}/edit', [CourseController::class, 'edit'])->name('courses.edit');
       Route::put('/cursos/{courses}/update', [CourseController::class, 'update'])->name('courses.update');
       Route::get('/cursos/{courses}/delete', [CourseController::class, 'destroy'])->name('courses.destroy');


});
Route::get('comandos', function () {
 Artisan::call('optimize');
 Artisan::call('view:clear');
 Artisan::call('cache:clear');
 Artisan::call('route:clear');
 Artisan::call('config:clear');
 Artisan::call('config:cache');
 Artisan::call('view:cache');
 Artisan::call('route:cache');

 return 'Comandos ejecutados con éxitos';
});

require __DIR__.'/auth.php';
