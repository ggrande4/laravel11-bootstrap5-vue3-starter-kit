<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FAQRCode\Google2FA;

class TwoFactorController extends Controller
{
    public function show2faForm()
    {
        return view('auth.twoFactor');
    }

    public function verify2fa(Request $request)
    {
        $google2fa = new Google2FA();
        $userId = $request->session()->get('2fa:user:id');
        $user = Auth::loginUsingId($userId);

        // Verify the one time password
        $recoveryCodes = json_decode($user->two_factor_recovery_codes, true);
        if (in_array($request->one_time_password, $recoveryCodes)) {
            // Remove used recovery code
            $recoveryCodes = array_diff($recoveryCodes, [$request->one_time_password]);
            $user->two_factor_recovery_codes = json_encode($recoveryCodes);
            $user->save();

            $remainingCodesCount = count($recoveryCodes);

            $request->session()->forget('2fa:user:id');
            Auth::login($user);
            $request->session()->regenerate();

            if($remainingCodesCount > 0){
                return redirect()->route('2fa.index')
                    ->with('status', 'Recovery code used. You have ' . $remainingCodesCount . ' recovery codes left.');
            }
            else{
                return redirect()->route('2fa.index')
                    ->with('status', 'Recovery code used. You have no recovery codes left. To save other recovery codes you can disable and enable again the 2FA');
            }
        }

        $request->validate([
            'one_time_password' => 'required|numeric',
        ]);

        $valid = $google2fa->verifyKey($user->two_factor_secret, $request->one_time_password);

        if ($valid) {
            $request->session()->forget('2fa:user:id');
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard', absolute: false));
        }

        Auth::logout();
        return redirect()->route('2fa.index')->withErrors(['one_time_password' => 'Invalid OTP or recovery code. Please try again.']);
    }
}
