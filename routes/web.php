<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SkillsController;
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
            return redirect('company/login')->with('error','Please Login first');
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

   
    Route::get('company/offer/create', [OffersController::class, 'create'])->name('offer.create.form');
    Route::post('company/offer/create', [OffersController::class, 'store'])->name('create.offer');
    Route::get('company/offer/skills/{id}', [OffersController::class, 'skills'])->name('offer.skills.page');
    Route::post('company/offer/skills/{id}', [SkillsController::class, 'addOfferSkill'])->name('add.offer.skill');

    Route::get('company/myoffers', [PagesController::class, 'getCompanyOffers'])->name('get.company.offers');
    Route::get('company/talents', [PagesController::class, 'getTalentsPage'])->name('get.talents');
    Route::get('company/talent/cv/{id}', [PagesController::class, 'getTalentCv'])->name('get.talents.cv');

/*------------End Company Routes---------------*/





Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/user/dashboard', [PagesController::class, 'getUserHome'])->middleware(['auth', 'verified'])->name('dashboard');


// شلت منه المدل وير لازم اضيف حماية انه الشركة متكدر تقدم
Route::get('/offer/{id}', [OffersController::class, 'show'])->name('offer.show');


Route::get('/offers', [PagesController::class, 'getOffers'])->name('offers');
Route::post('/offers/fillters/skill', [OffersController::class, 'skillFilter'])->name('offers.skill.filter');
Route::get('/user/applies', [PagesController::class, 'getApplies'])->name('get.user.applies');
Route::delete('/offer/remove/{id}', [OffersController::class, 'removeOffer'])->name('remove.offer');
Route::get('/offer/apply/{id}', [OffersController::class, 'createApply'])->middleware(['auth', 'verified'])->name('get.job.apply');
Route::post('/offer/apply/{id}', [OffersController::class, 'Apply'])->middleware(['auth', 'verified'])->name('job.apply');



Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/searching', [ProfileController::class, 'isSearching'])->middleware(['auth', 'verified'])->name('is.searching');

});

// استثناء من المدل وير
Route::get('/profile/{id}', [ProfileController::class, 'profile'])->name('profile.show');
Route::delete('profile/skill/remove/{id}', [SkillsController::class, 'removeOfferSkill'])->name('offer.skill.remove');


require __DIR__.'/auth.php';
