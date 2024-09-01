<?php

use App\Http\Controllers\Auth\AccountSettingsController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Auth\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/backend');
    }
    return view('app');
})->name('landing');

Route::get('/logout', function () {
    debug('AHAHAH');
    return view('logout');
})->middleware(['auth'])->name('go_logout');

Route::get('login/{provider}', [SocialLoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback'])->name('social.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('/dashboard', '/')->name('dashboard');
    Route::get('/account/settings', [AccountSettingsController::class, 'showSettings'])->name('account.settings');
    Route::post('/account/settings/two-factor-enable', [AccountSettingsController::class, 'enableTwoFactor'])->name('account.enableTwoFactor');
    Route::get('/account/settings/two-factor-enable', [AccountSettingsController::class, 'showEnableTwoFactorForm'])->name('account.showEnableTwoFactorForm');
    Route::post('/account/settings/two-factor-verify', [AccountSettingsController::class, 'verifyTwoFactor'])->name('account.verifyTwoFactor');
    Route::post('/account/settings/two-factor-disable', [AccountSettingsController::class, 'disableTwoFactor'])->name('account.disableTwoFactor');
});

Route::get('2fa', [TwoFactorController::class, 'show2faForm'])->name('2fa.index');
Route::post('2fa', [TwoFactorController::class, 'verify2fa'])->name('2fa.verify');

require __DIR__.'/auth.php';

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
