<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredCompanyController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ProfileController;

Route::middleware('guest')->group(function () {
    Route::get('user/register', [RegisteredUserController::class, 'create']);


    Route::post('user/register', [RegisteredUserController::class, 'store'])->name('user.register');

    Route::get('user/login', [AuthenticatedSessionController::class, 'userCreate']);
                

    Route::post('user/login', [AuthenticatedSessionController::class, 'userStore'])->name('user.login');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});



Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Route::put('password', [PasswordController::class, 'userUpdate'])->name('user.password.update');

    Route::post('user/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('user.logout');


    Route::post('profile/skill/add', [SkillsController::class, 'addSkill'])->name('add.skill');
    Route::delete('profile/remove/image', [ProfileController::class, 'deleteImage'])->name('Image.delete');
    Route::delete('profile/skill/remove/{id}', [SkillsController::class, 'removeSkill'])->name('skill.remove');
    Route::post('profile/education/add', [EducationController::class, 'addEducation'])->name('add.education');
    Route::delete('profile/education/remove/{id}', [EducationController::class, 'removeEducation'])->name('remove.education');
    Route::post('profile/experience/add', [ExperienceController::class, 'addExperience'])->name('add.experience');
    Route::delete('profile/experience/remove/{id}', [ExperienceController::class, 'removeExperience'])->name('remove.experience');
    Route::post('profile/language/add', [LanguagesController::class, 'addLanguage'])->name('add.language');
    Route::delete('profile/language/remove/{id}', [LanguagesController::class, 'removeLanguage'])->name('remove.language');

    /*--------------Profile Routes---------------*/


    // Route::prefix('profile')->group(function(){
        
    // });
    
   /*--------------End Profile Routes---------------*/


});
