<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;

class SocialLoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        //return Socialite::driver($provider)->redirect();
        return redirect()->route('social.callback', ['provider' => $provider]);
    }

    public function handleProviderCallback(Request $request, $provider)
    {
        try {
            //$user = Socialite::driver($provider)->stateless()->user();
            $user = $this->createStubUser($provider);

            /*$existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                Auth::login($existingUser, true);
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'provider_id' => $user->getId(),
                    'provider' => $provider,
                    'password' => encrypt('my-google')
                ]);

                Auth::login($newUser, true);
            }*/

            Auth::login($user, true);

            if ($user->two_factor_enabled) {
                Auth::logout();

                $request->session()->put('2fa:user:id', $user->id);

                return redirect()->route('2fa.index');
            }

            return redirect()->route('landing');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Something went wrong!');
        }
    }

    private function createStubUser($provider)
    {
        // replace it with a real user in your database
        $user = User::firstOrCreate(
            ['email' => 'ggrande4@gmail.com']
        );

        return $user;
    }
}
