<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredCompanyController;

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
/*------------Company Routes---------------*/


Route::prefix('company')->group(function () {

    Route::get('dashboard',function(){
        if(!Auth::guard('company')->check()){
            return view("auth.company-login")->with('error','Please Login first');
        }
        else{
            return view('company.dashboard');
        }
    
    
    })->name('company.dashboard');
    
    Route::get('/login', [AuthenticatedSessionController::class, 'companyCreate']);
    Route::post('/login', [CompanyController::class, 'login'])->name('company.login');

    Route::get('/register', [RegisteredCompanyController::class, 'create']);
    Route::post('/register', [RegisteredCompanyController::class, 'store'])->name('company.register');
    })->middleware('guest');

    Route::post('logout', [CompanyController::class, 'logout'])->name('company.logout');

   
    Route::get('company/offer/create', [OffersController::class, 'create']);
    Route::post('company/offer/create', [OffersController::class, 'store'])->name('create.offer');


/*------------End Company Routes---------------*/





Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/user/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/offers', [PagesController::class, 'getOffers'])->middleware(['auth', 'verified'])->name('offers');
Route::get('/offer/apply/{id}', [OffersController::class, 'createApply'])->middleware(['auth', 'verified'])->name('get.job.apply');
Route::post('/offer/apply/{id}', [OffersController::class, 'Apply'])->middleware(['auth', 'verified'])->name('job.apply');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
