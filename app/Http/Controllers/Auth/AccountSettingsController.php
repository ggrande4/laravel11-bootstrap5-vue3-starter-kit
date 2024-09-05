<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FAQRCode\Google2FA;
use Illuminate\Support\Str;

class AccountSettingsController extends Controller
{
    public function showSettings()
    {
        $user = Auth::user();
        return view('account.settings', compact('user'));
    }

    public function enableTwoFactor(Request $request)
    {
        $google2fa = new Google2FA();

        $user = Auth::user();
        $user->two_factor_secret = $google2fa->generateSecretKey();

        // recovery codes
        $recoveryCodes = collect(range(1, 10))->map(function () {
            return Str::random(10) . '-' . Str::random(10);
        })->toArray();
        $user->two_factor_recovery_codes = json_encode($recoveryCodes);

        $user->save();

        $QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            $user->email,
            $user->two_factor_secret
        );

        return view('account.enableTwoFactor', compact('QR_Image', 'recoveryCodes'));
    }

    public function verifyTwoFactor(Request $request)
    {
        $request->validate([
            'one_time_password' => 'required|numeric',
        ]);

        $google2fa = new Google2FA();
        $user = Auth::user();

        $valid = $google2fa->verifyKey($user->two_factor_secret, $request->one_time_password);

        if ($valid) {
            $user->two_factor_enabled = true;
            $user->two_factor_confirmed_at = now();
            $user->save();

            return redirect()->route('account.settings')->with('success', 'Two-factor authentication enabled.');
        } else {
            return redirect()->route('account.showEnableTwoFactorForm')->withErrors(['one_time_password' => 'Invalid OTP. Please try again.']);
        }
    }

    public function disableTwoFactor()
    {
        $user = Auth::user();
        $user->two_factor_secret = null;
        $user->two_factor_recovery_codes = null;
        $user->two_factor_enabled = false;
        $user->two_factor_confirmed_at = null;
        $user->save();

        return redirect()->route('account.settings')->with('success', 'Two-factor authentication disabled.');
    }

    public function showEnableTwoFactorForm(Request $request)
    {
        $google2fa = new Google2FA();
        $user = Auth::user();
        $QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            $user->email,
            $user->two_factor_secret
        );
        $recoveryCodes = json_decode($user->two_factor_recovery_codes, true);

        return view('account.enableTwoFactor', compact('QR_Image', 'recoveryCodes'));
    }
}
