<?php

use App\Http\Controllers\CentreController;
use App\Http\Controllers\CoordinationController;
use App\Http\Controllers\DetailReferentielController;
use App\Http\Controllers\IntervenantController;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\TypeExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer des routes Web pour votre application. Ces
| routes sont chargées à partir de RouteServiceProvider au sein d'un groupe qui
| contient le groupe middleware "web". Maintenant, créez quelque chose de géniale!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Juste pour resoudre l'erreur de chargement des fichiers de sessions
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::view('support', 'support')->name('support');


    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('/compte', [UserController::class, 'create'])->name('user-create');
//    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('referentiels', ReferentielController::class);
    Route::prefix('referentiel')
        ->group(function() {
            Route::get('/detail/{referentiel}', [ReferentielController::class,'indexSousReferentiel'])->name('sousRef.index');
        });

    Route::resource('detailreferentiel', DetailReferentielController::class);
    Route::prefix('detailreferentiels')
        ->group(function() {
            Route::get('/creation/{referentiel}', [DetailReferentielController::class,'createDetailReferentiel'])->name('sousRef.create');
        });

    Route::resource('examen', TypeExamController::class);
    Route::resource('centre', CentreController::class);
    Route::resource('intervenant', IntervenantController::class);


    Route::get('/decision_admin', [CoordinationController::class, 'decision_admin'])->name('decision_admin.index');
    Route::get('/decision_tech', [CoordinationController::class, 'decision_tech'])->name('decision_tech.index');
    Route::get('/decision_acad', [CoordinationController::class, 'decision_acad'])->name('decision_acad.index');


    Route::get('/decision_admin/done', [CoordinationController::class, 'decision_admin_done'])->name('decision_admin.done');
    Route::get('/decision_tech/done', [CoordinationController::class, 'decision_tech_done'])->name('decision_tech.done');
    Route::get('/decision_acad/done', [CoordinationController::class, 'decision_acad_done'])->name('decision_acad.done');
});

require __DIR__.'/auth.php';
