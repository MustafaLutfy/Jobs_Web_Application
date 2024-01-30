<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredCompanyController;
use App\Http\Controllers\Auth\PasswordController;

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
    Route::get('company/offer/edit/{id}', [OffersController::class, 'edit'])->name('edit.offer.form');
    Route::post('company/offer/edit/{id}', [OffersController::class, 'update'])->name('edit.offer');
    Route::get('company/offer/skills/{id}', [OffersController::class, 'skills'])->name('offer.skills.page');
    Route::post('company/offer/skills/{id}', [SkillsController::class, 'addOfferSkill'])->name('add.offer.skill');

    Route::get('company/myoffers', [PagesController::class, 'getCompanyOffers'])->name('get.company.offers');
    Route::get('company/chat/{id}', [ChatController::class, 'getChat'])->name('get.chat');
    Route::get('company/chat', [ChatController::class, 'getChatsPage'])->name('get.chats.page');
    Route::get('company/settings', [CompanyController::class, 'settings'])->name('company.settings');
    Route::patch('company/update/details', [CompanyController::class, 'detailsUpdate'])->name('company.update.details');
    Route::patch('company/update/location', [CompanyController::class, 'locationUpdate'])->name('company.update.location');
    Route::patch('company/update/about', [CompanyController::class, 'aboutUpdate'])->name('company.update.about');
    Route::put('company/password', [PasswordController::class, 'companyUpdate'])->name('company.password.update');
    Route::get('company/talents', [PagesController::class, 'getTalentsPage'])->name('get.talents');
    Route::get('company/{id}', [CompanyController::class, 'profile'])->name('company.profile');
    Route::get('company/talent/cv/{id}', [PagesController::class, 'getTalentCv'])->name('get.talents.cv');


/*------------End Company Routes---------------*/





Route::get('/', function () {
    if(!Auth::user()){
        return view('welcome');
    }
    elseif(Auth::guard('company')->check()){
        return redirect(route('company.dashboard'));
    }
    else{
        return redirect(route('dashboard'));
    }
})->name('home');



Route::get('/user/dashboard', [PagesController::class, 'getUserHome'])->middleware(['auth', 'verified'])->name('dashboard');


// شلت منه المدل وير لازم اضيف حماية انه الشركة متكدر تقدم
Route::get('/offer/{id}', [OffersController::class, 'show'])->name('offer.show');
// Route::delete('profile/skill/remove/{id}', [SkillsController::class, 'removeOfferSkill'])->name('offer.delete.skill');


Route::get('/offers', [PagesController::class, 'getOffers'])->name('offers');
Route::post('/offers/fillters/skill', [OffersController::class, 'skillFilter'])->name('offers.skill.filter');
Route::post('/offers/fillters/orderby', [OffersController::class, 'orderBy'])->name('offers.orderby.filter');
Route::get('/user/applies', [PagesController::class, 'getApplies'])->name('get.user.applies');
Route::delete('/offer/remove/{id}', [OffersController::class, 'removeOffer'])->name('remove.offer');
Route::get('/offer/apply/{id}', [OffersController::class, 'createApply'])->middleware(['auth', 'verified'])->name('get.job.apply');
Route::post('/offer/apply/{id}', [OffersController::class, 'Apply'])->middleware(['auth', 'verified'])->name('job.apply');
Route::delete('/skill/remove/{id}', [SkillsController::class, 'removeOfferSkill'])->name('remove.offer.skill');



Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/searching', [ProfileController::class, 'isSearching'])->middleware(['auth', 'verified'])->name('is.searching');

});

// استثناء من المدل وير
Route::get('/profile/{id}', [ProfileController::class, 'profile'])->name('profile.show');



Route::get('user/chat/{id}', [ChatController::class, 'getUserChat'])->name('user.get.chat');

Route::get('company/show/{id}', [CompanyController::class, 'showProfileForUser'])->name('cp.profile.show');


Route::post('/user/chat/{id}', [ChatController::class, 'addMessage'])->name('message.send');


Route::post('/company/chat/{id}', [ChatController::class, 'addMessage'])->name('message.send');
Route::delete('/company/chat/delete/{id}', [ChatController::class, 'messageDelete'])->name('message.delete');



// admin routes
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/alloffers', [AdminController::class, 'allOffers'])->name('admin.all-offers');
Route::get('/admin/companyrequest', [AdminController::class, 'companyRequest'])->name('company-request-page');
Route::put('/admin/actions/{id}', [AdminController::class, 'requestActions'])->name('company-request-actions');
Route::get('/admin/companies', [AdminController::class, 'allCompanies'])->name('all-companies');
Route::put('/admin/company/actions/{id}', [AdminController::class, 'companyActions'])->name('active-company-actions');
Route::get('/admin/allusers', [AdminController::class, 'allUsers'])->name('admin.all-users');
Route::put('/admin/user/actions/{id}', [AdminController::class, 'userActions'])->name('active-user-actions');



require __DIR__.'/auth.php';
